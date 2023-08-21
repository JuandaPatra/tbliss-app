<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\globalData;
use App\Models\logPayments;
use App\Models\Trip_categories;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = Payment::orderBy('id', 'DESC')->get();
        $ndata = [];

        foreach ($data as $dt) {
            $int = $dt->invoice_id;
            $str = (string) $int;
            $orderId = substr($str, 10, 2);
            if ($orderId == '00') {
                array_push($ndata, $dt);
            }
        }
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();

        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        // foreach($notifications as $notification){
        //     $notificationsplit = explode(' ', $notification->name);
        //     $notification['order'] = $notificationsplit[0];
        // }

        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
            $notificationsplit = explode(' ', $notification->name);
            $notification['order'] = $notificationsplit[0];
        }
        return view('admin.payment.index', compact('data', 'notifications', 'notificationsCount', 'ndata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('id', '=', $id)->first(['id', 'user_id', 'order_id', 'invoice_id', 'qty', 'price', 'trip_categories_id', 'price_dp', 'total', 'tanggal_pembayaran', 'foto_diunggah', 'tanggal_pembayaran_acc', 'status', 'visa', 'total_tipping', 'grand_total', 'due_date', 'opsi_pembayaran']);

        $datas = substr($data->invoice_id, 0, 11);
        $middle = 5;

        $finish = substr($data->invoice_id, 12, 17);
        $combine = $datas . $middle . $finish;
        // return $combine;
        $data5 = Payment::where('invoice_id', '=', $finish)->get();
        // return $data5;
        $isInstallmentPayment = 0;
        if (count($data5) == 0) {
            $isInstallmentPayment = 1;
        }

        $statusPayment = '';
        if ($data->opsi_pembayaran == 0) {
            $statusPayment = 'Pembayaran Cicilan';
        }

        $finishInstallment = 0;
        if ($middle == 5) {
            $finishInstallment = 1;
        }

        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.payment.details', compact('data', 'statusPayment', 'finishInstallment', 'isInstallmentPayment', 'notifications', 'notificationsCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function invoice($id)
    {
        $data = Cart::with(['user:id,name,email,phone', 'trip:id,title,price'])->whereId($id)->first(['id', 'user_id', 'trip_categories_id', 'qty', 'price', 'price_dp', 'total', 'tanggal_pembayaran',]);

        $dataCoba = [
            'title' =>  'tes',
            'data'  =>  $data
        ];

        // return $dataCoba;

        $pdf = PDF::loadView('admin.payment.invoice', $dataCoba)->setPaper('a4', 'landscape');

        return $pdf->download('tescobapdf.pdf');

        // return $pdf->stream('tesfile.pdf')
        //             ->header('Content-Type', 'aplication/pdf');

        // $pdf = PDF::loadView('admin.payment.invoice', $data);
        // return $pdf->download('pdf_file.pdf');
        // // return $data;

        // return view('admin.payment.invoice', compact('data'));
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            // $datas = Cart::with(['user'])->select('*');
            $datas = Payment::select('*');
            // $data = Cart::with(['user:id,name', 'trip:id,title,price'])->get();
            // $data = Cart::all();
            return DataTable::of($datas)
                ->addIndexColumn()
                ->addColumn('checkbox', '<input type="checkbox" name="users_checkbox[]" class="users_checkbox" value="{{$id}}"/>')
                ->rawColumns(['checkbox', 'action'])
                ->make(true);
        }
    }

    public function paymentConfirm(Request $request, $id)
    {
        $posts = Payment::whereId($id)->first();

        DB::beginTransaction();
        try {
            $post = Payment::whereId($id);
            $trip = Trip_categories::where('id', '=', $posts->trip_categories_id)->first();
            $post->update([
                'tanggal_pembayaran_acc' => Carbon::now(),
                'status'                 => 'Lunas'

            ]);


            $numseat = (int)$trip->seat;
            $qty = $posts->qty;

            $total = $numseat - $qty;
            $trip->update([
                'seat' => $total
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Pembayaran', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }

        return redirect()->back();
    }

    public function cancelSuccess(Request $request, $id)
    {
        $posts = Payment::whereId($id)->first();

        DB::beginTransaction();
        try {
            $post = Payment::whereId($id);
            $trip = Trip_categories::where('id', '=', $posts->trip_categories_id)->first();
            $post->update([
                'tanggal_pembayaran_acc' => Carbon::now(),
                'status'                 => 'Lunas'

            ]);


            $numseat = (int)$trip->seat;
            $qty = $posts->qty;

            $total = $numseat + $qty;
            $trip->update([
                'seat' => $total
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Pembayaran', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }

        return redirect()->back();
    }

    public function emailInvoice($id)
    {

        $posts = Payment::whereId($id)->first();

        //169175046400749
        $getInstallment1 = substr((string) $posts->invoice_id, 10, 2);  // bcd

        $dueDateNextInstallment = '';
        $dueTotalNextInstallment = '';
        $dueDateResult = '';


        if ($getInstallment1 == '00') {
            $getInstallmentUniqueId = substr((string) $posts->invoice_id, 0, 10);
            $getInstallmentUniquePhone = substr((string) $posts->invoice_id, 12, 3);

            $paymentInstallment = Payment::where('invoice_id', '=', $getInstallmentUniqueId . '01' . $getInstallmentUniquePhone)->get();

            if ($paymentInstallment->count() != 0) {
                $dueDateNextInstallment = $paymentInstallment[0]->tanggal_pembayaran;
                $dueTotalNextInstallment = $paymentInstallment[0]->total;



                $dueDateR    = date('l-j-m-Y-H-i ', strtotime($dueDateNextInstallment));


                $res = explode('-', $dueDateR);

                $resc = $this->dueDateIndonesia($dueDateR);

                $dueDateResult = $resc;
            }
        }



        // DB::beginTransaction();
        // try {
        //     $post = Payment::whereId($id);
        //     $trip = Trip_categories::where('id', '=', $posts->trip_categories_id)->first();
        //     $post->update([
        //         'tanggal_pembayaran_acc' => Carbon::now(),
        //         'status'                 => 'Lunas'

        //     ]);


        //     $numseat = (int)$trip->seat;
        //     $qty = $posts->qty;

        //     $total = $numseat - $qty;
        //     $trip->update([
        //         'seat' => $total
        //     ]);
        // } catch (\throwable $th) {
        //     DB::rollBack();
        //     Alert::error('Edit Pembayaran', 'error' . $th->getMessage());
        //     // return redirect()->back()->withInput($request->all());
        //     return redirect()->back();
        // } finally {
        //     DB::commit();
        // }


        // // $payment = Payment::with(['trip:id,title,seat,visa,price,tipping,day'])->where('id', '=', $id)->first();
        $payment = Payment::with(['trip'])->where('id', '=', $id)->first();
        $user = User::where('id', '=', $payment->user_id)->first();
        $invoiceDate = Carbon::now();



        $opsiPembayaran = '';
        if ($payment->opsi_pembayaran == 0) {
            $opsiPembayaran = 'Down Payment';

            $dataCoba = [
                'title'             =>  $user,
                'data'              =>  'tes data',
                'orderid'           =>  'ORD' . $payment->order_id,
                'invoice_id'        =>  $payment->invoice_id,
                // 'trip'              =>  $newCart,
                'price'             =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
                'trip_name'         =>  $payment->trip->title,
                'trip_qty'          =>  $payment->qty,
                'qty'               =>  $payment->qty,
                'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
                'onePrice'        =>  'Rp.' . 300000,
                'priceTrip'         => 'Rp.' . $payment->price_dp,
                'statusPembayaran'  =>  'Lunas',
                'opsiPembayaran'    => $opsiPembayaran,
                'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
                // 'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                'visaTotal'         => 'Rp.' . number_format($payment->visa, 0, ',', '.'),
                'tipping'           => 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.'),
                // 'totalTipping'      => 'Rp.' . number_format($payment->total_tipping, 0, ',', '.'),
                'tippingCaption'    => 'Tipping ' . 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.') . ' x ' . $payment->trip->day . 'hari',
                

                'tripPrice'         => 'Rp.' . number_format($payment->trip->price * $payment->qty , 0, ',', '.'), 
                'totalPrice'        =>  'Rp.' . number_format($payment->trip->price, 0, ',', '.'), 
                'totalTipping'      => 'Rp.' . number_format($payment->trip->total_tipping, 0, ',', '.'),
                'totalTippingQty'   => 'Rp.' . number_format($payment->trip->total_tipping * $payment->qty, 0, ',', '.'),
                'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                'totalVisa'         =>    'Rp.' . number_format($payment->trip->visa * $payment->qty, 0, ',', '.'),
                'grandTotal'        =>  number_format(($payment->trip->price + $payment->trip->total_tipping + $payment->trip->visa) * $payment->qty , 0, ',', '.'),

                'due_date'     =>  date('d/m/Y ', strtotime($payment->due_date)),

                'title_caption_due_date_1' => $payment->due_date_dua != null ? 'Pembayaran Installment 1': 'Pelunasan' ,
                'total_due_date'=> 'Rp.' . number_format($payment->price_dp * $payment->qty, 0, ',', '.') ,

                'due_date_payment' => date('d/m/Y ', strtotime($payment->updated_at)),

                'total_due_date_satu'=> $payment->due_date_dua != null ?  'Rp.' . number_format($payment->trip->installment1 * $payment->qty, 0, ',', '.') : 'Rp.' . number_format(($payment->trip->price + $payment->trip->total_tipping + $payment->trip->visa) * $payment->qty - $payment->price_dp * $payment->qty, 0, ',', '.') ,
                'due_date_satu' => date('d/m/Y ', strtotime($payment->due_date_satu)), 

                'total_due_date_dua'=> $payment->due_date_dua != null ? 'Rp.' . number_format($payment->trip->installment2 * $payment->qty, 0, ',', '.') : '',
                'due_date_dua'  => $payment->due_date_dua != null ?  date('d/m/Y ', strtotime($payment->due_date_dua)) : '',

                'total_sisa_pelunasan' =>  'Rp.' . number_format(($payment->trip->price + $payment->trip->total_tipping + $payment->trip->visa) * $payment->qty - $payment->price_dp * $payment->qty, 0, ',', '.')
            ];



            // $pdf = PDF::loadView('admin.payment.coba1', compact('dataCoba'));

            // return view('admin.invoice.index', compact('dataCoba'));

            $pdf = PDF::loadView('admin.invoice.index', compact('dataCoba'));
            // User::sendEMail($email, $pdf);
            PDF::getOptions()->set(
                'fontDir',
                storage_path('fonts/Bely_Display_W00_Regular.woff2')
            );
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->stream();

            $paths =  '-' . rand() . '_' . time();
            $path = Storage::put('public/storage/uploads/' . $paths . '.' . 'pdf', $pdf->output());
            $savePath =  $paths . '.' . 'pdf';
            $email = [
                'email'         => $dataCoba['title']['email'],
                'nama'          => $dataCoba['title']['name'],
                'telephone'     => $dataCoba['title']['phone'],
                'invoiceId'     => $payment->invoice_id,
                'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
                'qty'           => $payment->qty,
                
                'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
                'price'         =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
                'opsiPembayaran'    => $opsiPembayaran,
                'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
                
                
               
               
                'grandTotal'        =>  number_format($payment->grand_total, 0, ',', '.'),
                'dueDateNextInstallment' =>  $dueDateResult,
                'dueTotalNextInstallment' => $payment->due_date_dua != null ?  'Rp.' . number_format($payment->trip->installment1 * $payment->qty, 0, ',', '.') : 'Rp.' . number_format(($payment->trip->price + $payment->trip->total_tipping + $payment->trip->visa) * $payment->qty - $payment->price_dp * $payment->qty, 0, ',', '.') ,
                'due_date_satu' => date('d/m/Y ', strtotime($payment->due_date_satu)), 

                'trip_name'         => $payment->trip->title,
                'tripPrice'         => 'Rp.' . number_format($payment->trip->price, 0, ',', '.'),
                'tripPriceTotal'    => 'Rp.' . number_format($payment->trip->price * $payment->qty, 0, ',', '.'),
                'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                'visaTotal'         => 'Rp.' . number_format($payment->trip->visa * $payment->qty, 0, ',', '.'),
                'tipping'           => 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.'),
                'tippingOne'        => 'Rp.' . number_format($payment->trip->total_tipping, 0, ',', '.'),
                'totalTipping'      => 'Rp.' . number_format($payment->trip->total_tipping * $payment->qty, 0, ',', '.'),
                'tippingCaption'    => 'Tipping ' . 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.') . ' x ' . $payment->trip->day . 'hari',
                'total_sisa_pelunasan' =>  'Rp.' . number_format(($payment->trip->price + $payment->trip->total_tipping + $payment->trip->visa) * $payment->qty - $payment->price_dp * $payment->qty, 0, ',', '.')

            ];

        } else {
            $opsiPembayaran = 'Full Payment';

            $dataCoba = [
                'title'             =>  $user,
                'data'              =>  'tes data',
                'orderid'           =>  'ORD' . $payment->order_id,
                'invoice_id'        =>  $payment->invoice_id,
                // 'trip'              =>  $newCart,
                'price'             =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
                'trip_name'         =>  $payment->trip->title,
                'trip_qty'          =>  $payment->qty,
                'qty'               =>  $payment->qty,
                'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
                'onePrice'        =>  'Rp.' . 300000,
                'priceTrip'         => 'Rp.' . $payment->price_dp,
                'statusPembayaran'  =>  'Lunas',
                'opsiPembayaran'    => $opsiPembayaran,
                'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
                'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                'visaTotal'         => 'Rp.' . number_format($payment->visa, 0, ',', '.'),
                'tipping'           => 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.'),
                'totalTipping'      => 'Rp.' . number_format($payment->total_tipping, 0, ',', '.'),
                'tippingCaption'    => 'Tipping ' . 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.') . ' x ' . $payment->trip->day . 'hari',
                'grandTotal'        =>  number_format($payment->grand_total, 0, ',', '.'),

            ];


            $pdf = PDF::loadView('admin.invoice.indexFullPayment', compact('dataCoba'));
            // User::sendEMail($email, $pdf);
            PDF::getOptions()->set(
                'fontDir',
                storage_path('fonts/Bely_Display_W00_Regular.woff2')
            );
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->stream();

            $paths =  '-' . rand() . '_' . time();
            $path = Storage::put('public/storage/uploads/' . $paths . '.' . 'pdf', $pdf->output());
            $savePath =  $paths . '.' . 'pdf';
            $email = [
                'email'         => $dataCoba['title']['email'],
                'nama'          => $dataCoba['title']['name'],
                'telephone'     => $dataCoba['title']['phone'],
                'invoiceId'     => $payment->invoice_id,
                'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
                'qty'           => $payment->qty,
                'trip_name'     => $payment->trip->title,
                'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
                'price'         =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
                'opsiPembayaran'    => $opsiPembayaran,
                'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
                'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                'visaTotal'         => 'Rp.' . number_format($payment->visa, 0, ',', '.'),
                'tipping'           => 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.'),
                'totalTipping'      => 'Rp.' . number_format($payment->total_tipping, 0, ',', '.'),
                'tippingCaption'    => 'Tipping ' . 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.') . ' x ' . $payment->trip->day . 'hari',
                'grandTotal'        =>  number_format($payment->grand_total, 0, ',', '.'),
                'dueDateNextInstallment' => '',
                'dueTotalNextInstallment' => '',
            ];
        }






        Storage::put($path, $pdf->output());

        $paymentUpdatePaid = Payment::where('id', '=', $id);

        $paymentUpdatePaid->update([
            'url_paid_invoice' => $savePath
        ]);


        $urlKetentuan = globalData::where('categories', '=', 2)->first();

        $parse = parse_url($urlKetentuan->description);
        $urlVisa = globalData::where('categories', '=', 1)->first();
        $parseUrlVisa = parse_url($urlVisa->description);


        Mail::send('web.emails.emailPayment', $email, function ($message) use ($email, $pdf, $path, $parse, $parseUrlVisa) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Pembayaran Sukses  #' . $email['invoiceId']);
            $message->attachData(
                $pdf->output(),
                $email['nama'] . time() . '.' . 'pdf'
            );
            $message->attach(public_path($parse['path']));
            $message->attach(public_path($parseUrlVisa['path']));
        });

        return redirect()->back()->with('success', 'pesanan telah dibuat dan email konfirmasi telah dikirim');
    }



    public function dueDateIndonesia($dueDateEn)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $dueDateEn);


        $hari = $pecahkan[0];

        switch ($hari) {
            case 'Sunday':
                $hari_ini = "Minggu";
                break;

            case 'Monday':
                $hari_ini = "Senin";
                break;

            case 'Tuesday':
                $hari_ini = "Selasa";
                break;

            case 'Wednesday':
                $hari_ini = "Rabu";
                break;

            case 'Thursday':
                $hari_ini = "Kamis";
                break;

            case 'Friday':
                $hari_ini = "Jumat";
                break;

            case 'Saturday':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }


        $monthIndonesia = $bulan[(int)$pecahkan[2]];

        $newDateIndonesia = $hari_ini . ' ' . $pecahkan[1] . ' ' . $monthIndonesia . ' ' . $pecahkan[3] ?? null;

        return $newDateIndonesia;
    }

    private function timeAgo($time_ago)
    {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;

        switch ($time):
                // seconds
            case $time <= 60;
                return 'lessthan a minute ago';
                // minutes
            case $time >= 60 && $time < 3600;
                return (round($time / 60) == 1) ? 'a minute' : round($time / 60) . ' minutes ago';
                // hours
            case $time >= 3600 && $time < 86400;
                return (round($time / 3600) == 1) ? 'a hour ago' : round($time / 3600) . ' hours ago';
                // days
            case $time >= 86400 && $time < 604800;
                return (round($time / 86400) == 1) ? 'a day ago' : round($time / 86400) . ' days ago';
                // weeks
            case $time >= 604800 && $time < 2600640;
                return (round($time / 604800) == 1) ? 'a week ago' : round($time / 604800) . ' weeks ago';
                // months
            case $time >= 2600640 && $time < 31207680;
                return (round($time / 2600640) == 1) ? 'a month ago' : round($time / 2600640) . ' months ago';
                // years
            case $time >= 31207680;
                return (round($time / 31207680) == 1) ? 'a year ago' : round($time / 31207680) . ' years ago';

        endswitch;
    }
}

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
use App\Models\logPayments;
use App\Models\Trip_categories;
use App\Models\User;
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

        $data = Payment::all();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();


        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.payment.index', compact('data', 'notifications', 'notificationsCount'));
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
        // return $data;
        // $orderId = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('order_id','=', $data->order_id)->where('status','=', 'Menunggu Pembayaran')->get();

        $datas = substr($data->invoice_id, 0, 11);
        $middle = 5;

        $finish = substr($data->invoice_id, 12, 17);
        $combine = $datas.$middle.$finish;
        // return $combine;
        $data5 = Payment::where('invoice_id', '=',$finish)->get();
        // return $data5;
        $isInstallmentPayment =0;
        if(count($data5) == 0){
            $isInstallmentPayment = 1;
        }
        
        $statusPayment = '';
        if ($data->opsi_pembayaran == 0) {
            $statusPayment = 'Pembayaran Cicilan';
        }

        $finishInstallment = 0;
        if($middle == 5){
            $finishInstallment = 1;
        }

        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
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
        // return $id;
        $data = Cart::with(['user:id,name,email,phone', 'trip:id,title,price'])->whereId($id)->first(['id', 'user_id', 'trip_categories_id', 'qty', 'price', 'price_dp', 'total', 'tanggal_pembayaran',]);
        // $data = Cart::with(['user:id,name,email,phone', 'trip:id,title,price'])->whereId($id)->get(['id', 'user_id','trip_categories_id', 'qty', 'price', 'price_dp', 'total','tanggal_pembayaran',]);
        // view()->share('admin.payment.invoice', $data);
        // return $data;

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

        $payment = Payment::with(['trip:id,title,seat'])->where('id', '=', $id)->first();
        $user = User::where('id', '=', $payment->user_id)->first();
        $invoiceDate = Carbon::now();
        // return $payment;

        $dataCoba = [
            'title'             =>  $user,
            'data'              =>  'tes data',
            'orderid'           =>  'ORD' . $payment->order_id,
            'invoice_id'        =>  $payment->invoice_id,
            // 'trip'              =>  $newCart,
            'price'             =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
            'trip_name'         =>  $payment->trip->title,
            'trip_qty'          =>  $payment->qty,
            'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
            'statusPembayaran'  =>  'Lunas',
            'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
            // 'due_date'          => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days'))
        ];

        $pdf = PDF::loadView('admin.payment.coba1', compact('dataCoba'));
        // User::sendEMail($email, $pdf);
        PDF::getOptions()->set([
            'defaultFont' => 'helvetica',
            'chroot' => '/var/www/myproject/public',
        ]);
        $path = Storage::put('public/storage/uploads/' . '-' . rand() . '_' . time() . '.' . 'pdf', $pdf->output());
        $email = [
            'email'         => $dataCoba['title']['email'],
            'nama'          => $dataCoba['title']['name'],
            'telephone'     => $dataCoba['title']['phone'],
            'invoiceId'     => $payment->invoice_id,
            'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
            'qty'           => $payment->qty,
            'trip_name'     => $payment->trip->title,
            'price'         =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
        ];

        Storage::put($path, $pdf->output());

        Mail::send('web.emails.order', $email, function ($message) use ($email, $pdf, $path) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Order-' . $email['nama']);
            $message->attachData(
                $pdf->output(),
                $email['nama'] . time() . '.' . 'pdf'
            );
        });

        return redirect()->back();
    }

    public function finishPayment(Request $request, $id)
    {
        // return $id;
        $data = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('id', '=', $id)->first(['id', 'user_id', 'order_id', 'invoice_id', 'qty', 'price', 'trip_categories_id', 'price_dp', 'total', 'tanggal_pembayaran', 'foto_diunggah', 'tanggal_pembayaran_acc', 'status', 'visa', 'total_tipping', 'grand_total', 'due_date', 'opsi_pembayaran']);
        // return $data;
        // $orderId = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('order_id','=', $data->order_id)->where('status','=', 'Menunggu Pembayaran')->get();
        // return $orderId;
        $datas = substr($data->invoice_id, 0, 11);
        $middle = 5;

        $finish = substr($data->invoice_id, 12, 17);
        $newId = $datas.$middle.$finish;
        // return $finish;
        $finishPayment = [];
        $finishVisa = 0;
        $finishGrandTotal = 0;
        $finishTotalTipping = 0;
        $dateNow = Carbon::now()->toDateString();
        for ($i = 1; $i <= 3; $i++) {
            $fnish = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('invoice_id', '=', $datas . $i . $finish)->first(['id', 'user_id', 'order_id', 'invoice_id', 'qty', 'price', 'trip_categories_id', 'price_dp', 'total', 'tanggal_pembayaran', 'foto_diunggah', 'tanggal_pembayaran_acc', 'status', 'visa', 'total_tipping', 'grand_total', 'due_date', 'opsi_pembayaran']);
            if ($fnish != null) {
                array_push($finishPayment, $fnish);

                $finishVisa += $fnish->visa;
                $finishGrandTotal += $fnish->grand_total;
                $finishTotalTipping += $fnish->total_tipping;
            }
        }

        // return $finishPayment;
        // return $finishVisa;
        $statusPayment = '';
        if ($data->opsi_pembayaran == 0) {
            $statusPayment = 'Pembayaran Cicilan';
        }


        DB::beginTransaction();
        try {
            $paymentDetails = Payment::create([
                'order_id'              => $data->order_id,
                'invoice_id'            => $datas.$middle.$finish,
                'user_id'               => $data->user_id,
                'trip_categories_id'    => $data->trip_categories_id,
                'qty'                   => $data->qty,
                'price'                 => $data->price,
                'price_dp'              =>  $data->price_dp,
                'total'                 =>  $data->total,
                'tanggal_pembayaran'    => $dateNow,
                'due_date'              => $dateNow,
                'status'                => 'Menunggu Pembayaran',
                'visa'                  => $finishVisa,
                'total_tipping'         => $finishTotalTipping,
                'grand_total'           => $finishGrandTotal,
                'opsi_pembayaran'       => 1

            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Booking Trip', 'error' . $th->getMessage());
            // return redirect()->back()->withInput($request->all());
            return $th->getMessage();
        } finally {
            DB::commit();
        }
        return $newId;
        $newPayments = Payment::where('id', '=', $newId )->first();
        return redirect()->back();
        // return $newPayments;

        // $dataCoba = [
        //     'title'             =>  $user,
        //     'data'              =>  'tes data',
        //     'orderid'           =>  'ORD' . $newPayment->order_id,
        //     'invoice_id'        =>  $payment->invoice_id,
        //     // 'trip'              =>  $newCart,
        //     'price'             =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
        //     'trip_name'         =>  $payment->trip->title,
        //     'trip_qty'          =>  $payment->qty,
        //     'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
        //     'statusPembayaran'  =>  'Lunas',
        //     'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
        //     // 'due_date'          => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days'))
        // ];

        // $pdf = PDF::loadView('admin.payment.coba1', compact('dataCoba'));
        // // User::sendEMail($email, $pdf);
        // PDF::getOptions()->set([
        //     'defaultFont' => 'helvetica',
        //     'chroot' => '/var/www/myproject/public',
        // ]);
        // $path = Storage::put('public/storage/uploads/' . '-' . rand() . '_' . time() . '.' . 'pdf', $pdf->output());
        // $email = [
        //     'email'         => $dataCoba['title']['email'],
        //     'nama'          => $dataCoba['title']['name'],
        //     'telephone'     => $dataCoba['title']['phone'],
        //     'invoiceId'     => $payment->invoice_id,
        //     'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
        //     'qty'           => $payment->qty,
        //     'trip_name'     => $payment->trip->title,
        //     'price'         =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
        // ];

        // Storage::put($path, $pdf->output());

        // Mail::send('web.emails.order', $email, function ($message) use ($email, $pdf, $path) {
        //     $message->from('patrajuanda10@gmail.com');
        //     $message->to($email['email']);
        //     $message->subject('Order-' . $email['nama']);
        //     $message->attachData(
        //         $pdf->output(),
        //         $email['nama'] . time() . '.' . 'pdf'
        //     );
        // });

        return redirect()->back();
    }

    public function sendEmailUnpaid($id)
    {
        $data = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('id', '=', $id)->first(['id', 'user_id', 'order_id', 'invoice_id', 'qty', 'price', 'trip_categories_id', 'price_dp', 'total', 'tanggal_pembayaran', 'foto_diunggah', 'tanggal_pembayaran_acc', 'status', 'visa', 'total_tipping', 'grand_total', 'due_date', 'opsi_pembayaran']);
        // return $data;

        $user = User::where('id', '=', $data->user->id)->first(['id','name', 'email','phone','alamat']);
        $invoiceDate= Carbon::now()->toDateString();

         $dataCoba = [
            'title'             =>  $user,
            'data'              =>  'tes data',
            'orderid'           =>  'ORD' . $data->order_id,
            'invoice_id'        =>  $data->invoice_id,
            // 'trip'              =>  $newCart,
            'price'             =>  'Rp.' . number_format(($data->grand_total), 0, ',', '.'),
            'trip_name'         =>  $data->trip->title,
            'trip_qty'          =>  $data->qty,
            'trip_price'        =>  'Rp.' . number_format($data->price_dp, 0, ',', '.'),
            'statusPembayaran'  =>  'Lunas',
            'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
            // 'due_date'          => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days'))
        ];

        $pdf = PDF::loadView('admin.payment.coba2', compact('dataCoba'));
        // User::sendEMail($email, $pdf);
        PDF::getOptions()->set([
            'defaultFont' => 'helvetica',
            'chroot' => '/var/www/myproject/public',
        ]);
        $path = Storage::put('public/storage/uploads/' . '-' . rand() . '_' . time() . '.' . 'pdf', $pdf->output());
        $email = [
            'email'         => $dataCoba['title']['email'],
            'nama'          => $dataCoba['title']['name'],
            'telephone'     => $dataCoba['title']['phone'],
            'invoiceId'     => $data->invoice_id,
            'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
            'qty'           => $data->qty,
            'trip_name'     => $data->trip->title,
            'price'         =>  'Rp.' . number_format(($data->grand_total), 0, ',', '.'),
        ];

        Storage::put($path, $pdf->output());

        Mail::send('web.emails.order2', $email, function ($message) use ($email, $pdf, $path) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Order-' . $email['nama']);
            $message->attachData(
                $pdf->output(),
                $email['nama'] . time() . '.' . 'pdf'
            );
        });
        return redirect()->back();
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

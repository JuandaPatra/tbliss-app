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


        // $data = Cart::with(['user:id,name', 'trip:id,title,price'])->get();
        // return $data;
        // $datas = Payment::all();
        // return $datas;
        return view('admin.payment.index', compact('data'));
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
        $data = Payment::with(['trip:id,title,dp_price,visa,total_tipping', 'user:id,name,email,phone,alamat'])->where('id', '=', $id)->first(['id', 'user_id', 'order_id', 'invoice_id', 'qty', 'price', 'trip_categories_id', 'price_dp', 'total', 'tanggal_pembayaran', 'foto_diunggah', 'tanggal_pembayaran_acc', 'status','visa','total_tipping','grand_total','due_date', 'opsi_pembayaran']);
        // return $data;
        $statusPayment = '';
        if ($data->opsi_pembayaran == 0) {
            $statusPayment = 'Pembayaran Cicilan';
        }

        return view('admin.payment.details', compact('data', 'statusPayment'));
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
}

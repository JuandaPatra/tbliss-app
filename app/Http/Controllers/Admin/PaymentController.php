<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use PDF;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) 
        {
            // $datas = Cart::with(['user'])->select('*');
            $datas = Cart::select('*');
            $data = Cart::with(['user:id,name', 'trip:id,title,price'])->get();
            // $data = Cart::all();
            return Datatables::of($datas)
                        ->addIndexColumn()
                        ->addColumn('checkbox','<input type="checkbox" name="users_checkbox[]" class="users_checkbox" value="{{$id}}"/>')
                        ->rawColumns(['checkbox', 'action'])
                        ->make(true);
        }

        $data = Cart::with(['user:id,name', 'trip:id,title,price'])->get();
        // return $data;
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
        //
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
        $data = Cart::with(['user:id,name,email,phone', 'trip:id,title,price'])->whereId($id)->first(['id', 'user_id','trip_categories_id', 'qty', 'price', 'price_dp', 'total','tanggal_pembayaran',]);
        // $data = Cart::with(['user:id,name,email,phone', 'trip:id,title,price'])->whereId($id)->get(['id', 'user_id','trip_categories_id', 'qty', 'price', 'price_dp', 'total','tanggal_pembayaran',]);
        // view()->share('admin.payment.invoice', $data);
        // return $data;

        $dataCoba = [
            'title' =>  'tes',
            'data'  =>  $data
        ];

        // return $dataCoba;

        $pdf = PDF::loadView('admin.payment.invoice' , $dataCoba)->setPaper('a4', 'landscape');

        return $pdf->download('tescobapdf.pdf'); 

        // return $pdf->stream('tesfile.pdf')
        //             ->header('Content-Type', 'aplication/pdf');
    
        // $pdf = PDF::loadView('admin.payment.invoice', $data);
        // return $pdf->download('pdf_file.pdf');
        // // return $data;

        // return view('admin.payment.invoice', compact('data'));
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Support\Facades\Storage;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.checkout.index');
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
        // return view('web.invoice.order');
        
        if(!Auth::user()){
            return redirect()->to(route('signin.index'));
        }

        $datas = [
            'user' => Auth::user(),
        ];
        // return $datas;
        $email = [
            'email'         => 'juandaent@gmail.com',
            'nama'          => 'rahmad',
            'telephone'     => '087722039749'
        ];


        $newstring = substr($email['telephone'], -3);

        $dataCoba = [
            'title' =>  $email,
            'data'  =>  'tes data',
            'orderid'   => 'ORD'.time().$newstring
        ];
        // return $dataCoba['title'];

        $pdf = PDF::loadView('admin.payment.coba',compact('dataCoba'));
        // $pdf = PDF::loadView('admin.payment.cobaTailwind',compact('dataCoba'));


        return view('admin.payment.coba', compact('dataCoba'));

        // Storage::put('public/storage/uploads/'.'-'.rand().'_'.time().'.'.'pdf', $pdf->output());
        // return 'success';
        

        // User::sendEMail($email, $pdf);
        PDF::getOptions()->set([
            'defaultFont' => 'helvetica',
            'chroot' => '/var/www/myproject/public',
        ]);
        $path = Storage::put('public/storage/uploads/'.'-'.rand().'_'.time().'.'.'pdf', $pdf->output());

        // return $path;

        Storage::put($path, $pdf->output());

        Mail::send('web.emails.order', $email, function ($message) use( $email,$pdf, $path)  {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Subject');
            $message->attachData($pdf->output(),$email['nama'].time().'.'.'pdf'
                // $pdf->output(),$path,[
                //     'mime' =>   'aplication/pdf',
                //     'as'    => 'juandaent'.time().'.'.'pdf'
                // ]
            );
        });

        return 'success';

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
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Mail;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $url = url()->previous();

        $request->session()->put('url-prev', $url);

        return view('web.login.index');
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

    public function google(Request $request)
    {

        try {
            // return Socialite::driver($driver)->redirect();
            return Socialite::driver('google')->stateless()->redirect();
        } catch (Exception $e) {
            // You should show something simple fail message
            return $this->sendFailedResponse($e->getMessage());
        }
    }

    public function handleGoogleCallback(Request $request)
    {
        $callback = Socialite::driver('google')->stateless()->user();
        // return $callback;
        $data = [
            'name'      => $callback->getName(),
            'email'     => $callback->getEmail(),
            'password'  => bcrypt('password'),
            'google_id' => bcrypt($callback->getId())
        ];

        // return $data;
        $checkUser = User::where('email', '=', $data['email'])->get();
        $user = User::firstOrCreate([
            'email' => $data['email']
        ], $data);
        if (count($checkUser) == 0) {
            $user->assignRole('user');
        }

        Auth::login($user);

        // return redirect('/');


        $url = $request->session()->get('url-prev');
        return redirect()->to($url);
    }

    public function forgetPassword()
    {
        return view('web.login.forgetPassword');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                
                'password'             => 'required|min:6|same:confirmPassword',
                'confirmPassword'      => 'required|string|min:8',
                'email'                =>  'required|email',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        $findUser = User::where('email', '=', $request->email)->get();
        if (count($findUser) == 1) {
            $findUser[0]->update([
                'password' => bcrypt($request->password)
            ]);
        } else {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $email = [
            'email'         => $request->email,
            'name'          => $findUser[0]->name

        ];

        Mail::send('web.emails.changePassword', $email, function ($message) use ($email,$request) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Pergantian kata sandi '. $request->email );
        });

        return redirect()->route('signin.index')->with('success', 'kamu berhasil mengganti kata sandi');
    }
}

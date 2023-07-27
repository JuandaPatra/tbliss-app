<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
        $data= [
            'name'      => $callback->getName(),
            'email'     => $callback->getEmail(),
            'password'  => bcrypt('password'),
            'google_id' => bcrypt($callback->getId())
        ];

        // return $data;
        $checkUser = User::where('email','=',$data['email'])->get();
        $user = User::firstOrCreate([
            'email' =>$data['email']
        ], $data);
        if(count($checkUser) == 0){
            $user->assignRole('user');
        }

        Auth::login($user);

        // return redirect('/');

        
       $url= $request->session()->get('url-prev');
        return redirect()->to($url);
    }
}

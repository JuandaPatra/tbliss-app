<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        // return $provinces;
        return view('web.register.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'                 => 'required|string',
                'password'             => 'required|min:6|same:confirmPassword',
                'confirmPassword'      => 'required|string|min:8',
                'email'                =>  'required|email|unique:users,email',
                'g-recaptcha-response' => 'recaptcha',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        $findUser = User::where('email', '=', $request->email)->get();
        if (count($findUser) == 0) {
            $user = User::create([
                'name'                              => $request->name,
                'email'                             => $request->email,
                'password'                          => bcrypt($request->password),
            ]);
            $user->assignRole('user');
        } else {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $user = User::where('email', '=', $request->email)->first();
        Auth::login($user);

        $email = [
            'email'         => $request->email,
            'name'          => $request->name

        ];

        Mail::send('web.emails.emailGreeting', $email, function ($message) use ($email,) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Selamat bergabung dengan Tbliss');
        });

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
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

    public function selectcities($id)
    {
        $cities = Regency::where('province_id', '=', $id)->get();
        return $cities;
    }
}

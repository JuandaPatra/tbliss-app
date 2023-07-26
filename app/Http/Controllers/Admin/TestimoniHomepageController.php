<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\logPayments;
use App\Models\User;
use Illuminate\Http\Request;

class TestimoniHomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::with('roles:name')->whereHas("roles", function ($q) {
            $q->where("name", "superadmin")
                ->orWhere("name", "admin")
                ->orWhere("name" , "user");
        })->get();

        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.testimoni.index', compact('datas', 'notifications', 'notificationsCount'));
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
}

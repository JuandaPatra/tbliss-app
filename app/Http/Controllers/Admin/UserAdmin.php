<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\emails;
use App\Models\logPayments;
use Illuminate\Support\Facades\Hash;
use DataTables;

class UserAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = Slider::all();
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

        return view('admin.user-admin.index', compact('datas', 'notifications', 'notificationsCount'));
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->select('*');
            // $data = User::select([])->with('roles');
            $data = User::with('roles:name');

            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('finish_date', function ($row) {
                    $date = date("d F Y h:m", strtotime($row->created_at));
                    return $date;
                })
                ->addColumn('roles', function ($user) {
                    $roles = $user->roles->first()->name;
                    // $rolef = $roles->name;
                    return  ucfirst($roles);
                })
                ->addColumn('action', function ($user) {


                    return '
                    <a href="'.route('user-admin.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    
                    <a href="'.route('user-admin.destroy', $user->id).'" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>';

                    // return '<div class="dropdown-menu">
                    //      <a class="dropdown-item" href="' . route('user-admin.edit', $user->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>             
                    //      <a class="dropdown-item" href="' . route('user-admin.destroy', $user->id) . '" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest("form").submit();return false;">
                    //         <i class="bx bx-trash me-1"></i>Delete
                    //     </a>
                         
                    //  </div>';
                })
                // ->addColumn('roles', function($row){
                //     $role = $row->roles[0]->name;
                //     return $role;
                // })
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count(); 
        $roles = [
            'superadmin',
            'admin'
        ];
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.user-admin.create', compact('roles', 'notifications', 'notificationsCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'name'                 =>   'required|string',
                'password'             =>   'required|min:6|same:confirmPassword',
                'confirmPassword'      =>   'required|string|min:8',
                'email'                =>   'required|email|unique:users,email',
                'role'                 =>   'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }


        DB::beginTransaction();
        try {
            $user = User::create([
                'name'                              => $request->name,
                'email'                             => $request->email,
                'password'                          => bcrypt($request->password),
            ]);
            $user->assignRole($request->role);

            Alert::success('Tambah Admin', 'Berhasil');
            return redirect()->route('user-admin.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Admin', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('roles')->where('id', '=', $id)->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        // return $user;
        $roleOld = $user->roles[0]->name;
        $roles = [
            'superadmin',
            'admin'
        ];
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.user-admin.edit', compact('user', 'roles', 'roleOld', 'notifications', 'notificationsCount'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'                 =>   'required|string',
                'password'             =>   'required|min:8|same:confirmPassword',
                'confirmPassword'      =>   'required|string|min:8',
                'oldPassword'          =>   'required',
                'email'                =>   'required|email',
                'role'                 =>   'required'
            ]
        );


        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        $user = User::where('id', '=', $id)->first();

        if (Hash::check($request->oldPassword, $user->password)) {
            DB::beginTransaction();
            try {
                $user = User::with('roles')->where('id', '=', $id)->first();
                $oldRole = $user->roles[0]->name;
                if ($user) {
                    $user->update([
                        'name'                              => $request->name,
                        'email'                             => $request->email,
                        'password'                          => bcrypt($request->password),
                    ]);

                    $user->removeRole($oldRole);
                    $user->assignRole($request->role);
                } else {
                    Alert::error('Tambah Admin', 'error Cek kembali email dan Password');
                    return redirect()->back()->withInput($request->all());
                }

                Alert::success('Tambah Admin', 'Berhasil');
                return redirect()->route('user-admin.index');
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Admin', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        } else {
            Alert::error('Tambah Admin', 'error Cek kembali email dan Password');
            return redirect()->back()->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', '=', $id)->first();
        try {
            $user->delete();
            Alert::success('Delete User Admin', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete User Admin', 'error' . $th->getMessage());
        }
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

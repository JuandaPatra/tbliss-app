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
                ->orWhere("name", "admin");
        })->get();

        
        return view('admin.user-admin.index', compact('datas'));
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->select('*');
            $data = User::select([])->with('roles');
            
            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('finish_date', function ($row) {
                    $date = date("d F Y h:m", strtotime($row->created_at));
                    return $date;
                })
                // ->addColumn('roles', function ($user) {
                //     return '<a class="btn btn-primary" href="#">'. ucfirst($user->roles->first()->name) .'</a>';
                // })
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
        $roles = [
            'superadmin',
            'admin'
        ];
        return view('admin.user-admin.create', compact('roles'));
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
        // return $user;
        $roleOld = $user->roles[0]->name;
        $roles = [
            'superadmin',
            'admin'
        ];

        return view('admin.user-admin.edit', compact('user', 'roles', 'roleOld'));
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
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'name'                 =>   'required|string',
        //         'password'             =>   'required|min:6|same:confirmPassword',
        //         'confirmPassword'      =>   'required|string|min:8',
        //         'oldPassword'          =>   'required',
        //         'email'                =>   'required|email', 
        //         'role'                 =>   'required'
        //     ]
        // );


        // if ($validator->fails()) {
        //     return redirect()->back()->withInput($request->all())->withErrors($validator);
        // }
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
        //
    }
}

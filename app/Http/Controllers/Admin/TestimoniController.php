<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\globalData;
use App\Models\logPayments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use DataTables;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = globalData::whereId(3)->get();


        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        return view('admin.testimoni.index', compact('datas', 'notifications', 'notificationsCount'));
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('roles')->select('*');
            // $data = User::select([])->with('roles');
            $data = User::with('roles:name');

            $data = globalData::where('categories','=',3)->get();

            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('finish_date', function ($row) {
                //     $date = date("d F Y h:m", strtotime($row->created_at));
                //     return $date;
                // })
                // ->addColumn('roles', function ($user) {
                //     $roles = $user->roles->first()->name;
                //     // $rolef = $roles->name;
                //     return  ucfirst($roles);
                // })
                ->addColumn('action', function ($user) {


                    return '
                    <a href="'.route('testimoni-trip.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    
                    <a href="'.route('testimoni-trip.destroy1', $user->id).'" class="btn btn-xs btn-danger deleteUser"><i class="fa fa-trash"></i> Delete</a>
                    ';

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
        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();

        return view('admin.testimoni.create', compact('notifications', 'notificationsCount'));
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
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
                'image'         =>  'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $post = globalData::create([
                'name'         =>  $request->name,
                'description'   =>  $request->description,
                'image'         => $request->image,
                'categories'    => 3
                
            ]);
            DB::commit();
            
            Alert::success('Tambah Testimoni', 'Berhasil');
            return redirect()->route('testimoni-trip.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Testimoni', 'error' . $th->getMessage());
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
        
        $datas = globalData::whereId($id)->first();

        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        return view('admin.testimoni.edit', compact('datas', 'notifications', 'notificationsCount'));
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
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
                'image'         =>  'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $testimoni = globalData::whereId($id);
            $post = $testimoni->update([
                'name'         =>  $request->name,
                'description'   =>  $request->description,
                'image'         => $request->image,
                'categories'    => 3
                
            ]);
            DB::commit();
            
            Alert::success('Update Testimoni', 'Berhasil');
            return redirect()->route('testimoni-trip.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Update Testimoni', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
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
        $testimoni = globalData::where('id', '=', $id)->first();
        try {
            $testimoni->delete();
            Alert::success('Delete Testimoni', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Testimoni', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        $testimoni = globalData::where('id', '=', $id)->first();

        try {
            $testimoni->delete();
            Alert::success('Delete Testimoni', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Testimoni', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }
}

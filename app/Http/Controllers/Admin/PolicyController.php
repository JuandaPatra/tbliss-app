<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\globalData;
use App\Models\logPayments;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visa = globalData::whereId('1')->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count(); 
        return view('admin.rules.index',compact('visa', 'notifications', 'notificationsCount'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $syarat = globalData::whereId('2')->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count(); 
        return view('admin.syarat.index',compact('syarat', 'notifications', 'notificationsCount'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $editVisa = globalData::whereId(1);
            $post = $editVisa->update([
                'name'         =>  $request->name,
                'description'   =>  $request->description,
                
            ]);
            DB::commit();
            
            Alert::success('Edit Persyaratan Visa', 'Berhasil');
            return redirect()->route('policy.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Persyaratan Visa', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSyarat(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $editVisa = globalData::whereId(2);
            $post = $editVisa->update([
                'name'         =>  $request->name,
                'description'   =>  $request->description,
                
            ]);
            DB::commit();
            
            Alert::success('Edit Persyaratan dan Ketentuan', 'Berhasil');
            return redirect()->route('policy.syarat');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Persyaratan dan Ketentuan', 'error' . $th->getMessage());
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Trip_exclude;

class ExcludesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                'title' => 'required|string|max:100',
                // 'slug' => 'required|string|unique:trip_excludes,slug',
                'thumbnail2' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Trip_exclude::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'icon_image' => $request->thumbnail2,
                'trip_cat_id' => $request->trip_cat_id,
            ]);

            Alert::success('Tambah excludes', 'Berhasil');
            return redirect()->back();
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Includes', 'error' . $th->getMessage());
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
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                // 'slug' => 'required|string|unique:trip_excludes,slug',
                'thumbnail2' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Trip_exclude::whereId($id);
            $post->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'icon_image' => $request->thumbnail2,
                'trip_cat_id' => $request->trip_cat_id,
            ]);
            Alert::success('Edit excludes', 'Berhasil');
            return redirect()->back();
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Excludes', 'error' . $th->getMessage());
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
        $excludes = Trip_exclude::whereId($id); 
        try {
            $excludes->delete();
            Alert::success('Delete Exclude', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Exclude', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

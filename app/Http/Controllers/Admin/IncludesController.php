<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Trip_includes;

class IncludesController extends Controller
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
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                // 'slug' => 'required|string|unique:trip_includes,slug',
                'thumbnail' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Trip_includes::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'icon_image' => $request->thumbnail,
                'trip_cat_id' => $request->trip_cat_id,
            ]);

            Alert::success('Tambah Includes', 'Berhasil');
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
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                // 'slug' => 'required|string|unique:trip_includes,slug',
                'thumbnail' => 'required'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();

        try {
            $category= Trip_includes::whereId($id);
            $category ->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'icon_image' => $request->thumbnail,
                'trip_cat_id' => $request->trip_cat_id,
            ]);
            Alert::success('Update Includes', 'Berhasil');
            // return redirect()->route('product.index');
            return redirect()->back();
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Update Includes', 'error' . $th->getMessage());
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
        $includes = Trip_includes::whereId($id); 
        try {
            $includes->delete();
            Alert::success('Delete Include', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Include', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

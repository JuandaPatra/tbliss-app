<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\place_trip_categories_cities;

class EditCitiesController extends Controller
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
        //  return $request;
         $validator = Validator::make(
            $request->all(),
            [
                'cities'         =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        DB::beginTransaction();
        foreach($request->cities as $inputCity){
            try {
                $post = place_trip_categories_cities::create([
                    'trip_categories_id'                => $request->trip_categories_id,
                    'place_categories_id'               => $inputCity,
                ]);
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Kota Tujuan Trip', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        }

        Alert::success('Tambah kota Tujuan Trip', 'Berhasil');
        return redirect()->back();
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
        // return $id;
        try {
            $place_trip_categories_cities = place_trip_categories_cities::whereId($id);
            $place_trip_categories_cities->delete();
            Alert::success('Delete Kota', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Kota', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

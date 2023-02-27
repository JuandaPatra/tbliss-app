<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Place_trip_categories;

class EditCountriesController extends Controller
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
                'countries'         =>  'required|' ,
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        // return $request->countries[0];
        DB::beginTransaction();
        foreach($request->countries as $inputCountry){
            $checkCountry = Place_trip_categories::where('place_categories_id','=', $inputCountry)->where('trip_categories_id','=',$request->trip_categories_id)->get();
            if(count($checkCountry)>=1){
                Alert::error('Tambah Negara Tujuan Trip', 'Negara Telah Dipilih' );
                return redirect()->back()->withInput($request->all());
            }
            try {
                $post = Place_trip_categories::create([
                    'trip_categories_id'                => $request->trip_categories_id,
                    'place_categories_id'               => $inputCountry,
                ]);
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Negara Tujuan Trip', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        }

        Alert::success('Tambah Negara', 'Berhasil');
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
            $place_trip_categories = Place_trip_categories::whereId($id);
            $place_trip_categories->delete();
            Alert::success('Delete Negara', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Negara', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

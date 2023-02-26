<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Hashtag_place_trip;

class EditHashtagTripController extends Controller
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
                'hashtag'         =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        DB::beginTransaction();
        foreach($request->hashtag as $hashtag){
            try {
                $post = Hashtag_place_trip::create([
                    'trip_categories_id'                => $request->trip_categories_id,
                    'hashtag_id'               => $hashtag,
                ]);
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Hashtag', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        }

        Alert::success('Tambah Hashtag', 'Berhasil');
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
            $hashtag_place_trip = Hashtag_place_trip::whereId($id);
            $hashtag_place_trip->delete();
            Alert::success('Delete Hashtag', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Hashtag', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

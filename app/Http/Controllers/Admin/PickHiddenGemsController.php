<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\PickHiddenGem;

class PickHiddenGemsController extends Controller
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
                'hashtag' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } 
        // return $request;
        foreach ($request->hashtag as $index) {
            $checkHiddenGem = PickHiddenGem::where('hidden_gem_id','=', $index)->where('place_categories_categories_cities_id','=',$request->place_categories_categories_cities_id)->get();
            if(count($checkHiddenGem)>=1){
                Alert::error('Tambah Hidden Gem', 'Hidden Gem Telah Dipilih' );
                return redirect()->back()->withInput($request->all());
            }
            // return $index;
            DB::beginTransaction();
            try {
                $post = PickHiddenGem::create([
                    'place_categories_id' => $request->place_categories_id,
                    'place_categories_categories_cities_id' => $request->place_categories_categories_cities_id,
                    'hidden_gem_id' => $index,
                ]);
            } catch (\throwable $th) {
                DB::rollBack();
                Alert::error('Tambah Kategori', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        }

        Alert::success('Tambah Hidden Gem', 'Berhasil');
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
        try {
            $delete = PickHiddenGem::whereId($id);
            $delete->delete();
            Alert::success('Delete Activities', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Activities', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }
}

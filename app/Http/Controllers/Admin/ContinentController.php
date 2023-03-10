<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place_categories;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Place_categories::onlyParent()->with('descendants')->get();
        return view('admin.continent.index', compact('datas'));
    }

    public function select(Request $request)
    {
        $categories = [];
        if ($request->has('q')) {
            $search = $request->q;
            $categories = Place_categories::select('id', 'title')->where('title', 'LIKE', "%$search%")->limit(6)->get();
        } else {
            $categories = Place_categories::select('id', 'title')->onlyParent()->limit(6)->get();
        }
        return response()->json($categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.continent.create', [
            'statuses' => $this->statuses(),
            'orders' => $this->orders()
        ]);
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
                'title'         => 'required|string|max:100',
                'slug'          => 'required|string|unique:place_categories,slug',
                'status'        => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        $destination = null;
        if($request->destination){
            $destination = $request->destination;
        }

        DB::beginTransaction();
        try {
            $post = Place_categories::create([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'parent_id'         => $destination,
                'status'            => $request->status,
                'images'            => $request->images,
                'images2'           => $request->images2
            ]);

            Alert::success('Tambah Benua', 'Berhasil');
            return redirect()->route('continent.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Benua', 'error' . $th->getMessage());
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
        $continent = Place_categories::where('id', '=', $id)->get();

        return view('admin.continent.edit', [
            'continent'         => $continent[0],
            'orders'            => $this->orders(),
            'statuses'          => $this->statuses()
        ]);
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
                'title'             => 'required|string|max:100',
                'slug'              => 'required|string|',
                'status'            => 'required'
            ]
        );
        if ($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try {
            $post = Place_categories::where('id', '=', $id);

            $post->update([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'parent_id'         =>$request->destination,
                'status'            => $request->status,
                'images'            => $request->images,
                'images2'           => $request->images2
            ]);

            Alert::success('Edit Destinasi', 'Berhasil');
            return redirect()->route('continent.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Destinasi', 'error' . $th->getMessage());
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
    public function destroy(Place_categories $place_categories)
    {
        // return $place_categories;
        try {
            $place_categories->delete();
            Alert::success('Delete Continent', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Continent', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }



    private function statuses()
    {

        return [
            'draft' => 'draft',
            'publish' => 'publish',
        ];
    }

    private function orders()
    {
        return [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4
        ];
    }
}

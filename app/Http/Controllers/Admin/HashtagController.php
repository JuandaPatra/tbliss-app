<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Place_categories;

class HashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Hashtag::all();
        return view('admin.hashtag.index', compact('datas'));
    }

    public function select(Request $request)
    {
        $categories = [];
        if ($request->has('q')) {
            $search = $request->q;
            // $categories = CategoryProducts::select('id', 'title')->where('title', 'LIKE', "%$search%")->limit(6)->get();
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
        return view('admin.hashtag.create', [
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
                'title' => 'required|string|max:100',
                'slug' => 'required|string|unique:hashtags,slug',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Hashtag::create([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);

            Alert::success('Tambah Hashtag', 'Berhasil');
            return redirect()->route('hashtag.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Hashtag', 'error' . $th->getMessage());
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

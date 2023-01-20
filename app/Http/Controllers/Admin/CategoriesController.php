<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Categories;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Categories::all();
        return view('admin.categories.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', [
            'statuses' => $this->statuses()
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
                'slug' => 'required|string|unique:posts,slug',
                'description' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Categories::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'image' => $request->image,
                'status' => $request->status
            ]);

            Alert::success('Tambah Kategori', 'Berhasil');
            return redirect()->route('categories.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Kategori', 'error' . $th->getMessage());
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
    public function show(Categories $category)
    {
        return $category;
        return view('admin.categories.edit', [
            'slider' => $category,
            'statuses' => $this->statuses(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $category;
        // return view('admin.categories.edit',[
        //     'category' => $category,
        //     'statuses' => $this->statuses(),
        // ]);

        // return $id;

        $category = Categories::where('id', '=', $id)->get();
        // return $category;

        return view('admin.categories.edit', [
            'category' => $category[0],
            'statuses' => $this->statuses(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        // return $request;
        // return $category;
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'status' => 'required'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();

        try {
            $category ->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'status' => $request->status,
            ]);
            Alert::success('Update Categories', 'Berhasil');
            return redirect()->route('categories.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Update Categories', 'error' . $th->getMessage());
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
    public function destroy(Categories $category)
    {
        // $categoryId = Categories::where('id', '=', $category)->get();
        try {
            $category->delete();
            Alert::success('Delete Category', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Category', 'error'.$th->getMessage()); 
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
}

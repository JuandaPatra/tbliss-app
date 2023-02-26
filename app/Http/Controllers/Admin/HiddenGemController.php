<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use App\Models\Hidden_gem;
use App\Models\hidden_gem_hashtag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class HiddenGemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Hidden_gem::all();
        return view('admin.hidden_gem.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hidden_gem.create', [
            'statuses' => $this->statuses(),
            'orders' => $this->orders(),
            'checkboxes' => $this->checkbox()
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
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'slug' => 'required|string|unique:hidden_gems,slug',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        // return $request;
        DB::beginTransaction();
        try {
            $post = Hidden_gem::create([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'description1'      => $request->description,
                'image_desktop'     => $request->image_desktop,
                'image_mobile'      => $request->image_mobile,
                'places_id'         => $request->destination,
                'status'            => $request->status,
            ]);

            DB::commit();

            $hidden_gem_id = Hidden_gem::where('title', '=', $request->title)->get();

            foreach ($request->hashtag as $input) {
                try {
                    $post = hidden_gem_hashtag::create([
                        'hidden_gem_id'         => $hidden_gem_id[0]->id,
                        'hashtag_id'            => $input,
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Hidden Gem', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }
            // return $hidden_gem_id;



            Alert::success('Tambah Hidden Gem', 'Berhasil');
            return redirect()->route('activities.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Hidden Gem', 'error' . $th->getMessage());
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
        
        // $hiddem_gem = Hidden_gem::whereId($id)->get();
        $hiddem_gem = Hidden_gem::whereId($id)->with(['place', 'hidden_hashtag'])->get(['id','title','slug','description1','image_desktop','image_mobile', 'places_id','status']);
        // return $hiddem_gem;
        // return $this->checkbox();

        return view('admin.hidden_gem.edit',[
            'hidden_gem' => $hiddem_gem[0],
            'statuses'  => $this->statuses(),
            'checkboxes' => $this->checkbox()
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
        // return $id;

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                // 'slug' => 'required|string|unique:hidden_gems,slug',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        // return $request;
        DB::beginTransaction();
        try {
            $post = Hidden_gem::whereId($id);
            $post ->update([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'description1'      => $request->description,
                'image_desktop'     => $request->image_desktop,
                'image_mobile'      => $request->image_mobile,
                'places_id'         => $request->destination,
                'status'            => $request->status,
            ]);

            DB::commit();
            $hidden_gem_id = Hidden_gem::where('title', '=', $request->title)->get();
            $result=hidden_gem_hashtag::whereIn('id',$request->invisible)->delete();
            foreach($request->hashtag as $updates){
                try {
                    $post = hidden_gem_hashtag::create([
                        'hidden_gem_id'         => $hidden_gem_id[0]->id,
                        'hashtag_id'            => $updates,
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Edit Hidden Gem', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }
            Alert::success('Update Hidden Gem', 'Berhasil');
            return redirect()->route('activities.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Update Hidden Gem', 'error' . $th->getMessage());
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
    private function checkbox()
    {
        $hashtags = Hashtag::all(['id', 'title']);

        return $hashtags;
    }
}

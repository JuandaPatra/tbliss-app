<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hidden_gem;
use App\Models\logPayments;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\HiddenGemHomepage;
use DataTables;
use Illuminate\Support\Facades\Validator;

class ChooseHiddenGemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        $options = Hidden_gem::all(['id', 'title']);
        $listHiddenGems = HiddenGemHomepage::with('hidden_gem:id,title,image_desktop')->get(['id', 'hidden_gem_id','country_id']);
        return view('admin.displayHiddenGem.index', compact('notifications', 'notificationsCount', 'options', 'listHiddenGems'));
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

        $hidden_gem = Hidden_gem::where('id', '=', $request->hidden_gem_id)->first();

        $validator = Validator::make(
            $request->all(),
            [
                'hidden_gem_id'         =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $checkAll = HiddenGemHomepage::all(['id']);
            $count = $checkAll->count();
            if ($count >= 8) {
                Alert::error('Pilih Hidden Gem', 'error jumlah hidden gem yang sudah di pilih adalah 8');
                return redirect()->back()->withInput($request->all());
            } else {
                $check = HiddenGemHomepage::where('hidden_gem_id', '=', $request->hidden_gem_id);
                if ($check->count() != 0) {
                    Alert::error('Pilih Hidden Gem', 'Hidden gem sudah di pilih');
                    return redirect()->back()->withInput($request->all());
                } else {
                    $post = HiddenGemHomepage::create([
                        'hidden_gem_id'         =>  $request->hidden_gem_id,
                    ]);
                    DB::commit();

                    Alert::success('Pilih hidden Gem', 'Berhasil');
                    return redirect()->route('choose-hidden-gem.index');
                }
            }
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Testimoni', 'error' . $th->getMessage());
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
        $testimoni = HiddenGemHomepage::where('hidden_gem_id', '=', $id)->first();
        try {
            $testimoni->delete();
            Alert::success('Delete Testimoni', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Testimoni', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\logPayments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\review_hidden_gem;

class HiddenGemReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        $datas = review_hidden_gem::where('hidden_gem_id', '=', $id)->get();
        return view('admin.hidden_gem.testimoni', compact('notifications', 'notificationsCount', 'id', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        
        return view('admin.hidden_gem.addTestimoni');
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
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $post = review_hidden_gem::create([
                'name'                      =>  $request->name,
                'description'               =>  $request->description,
                'hidden_gem_id'             => $request->hidden_gem_id,
                
            ]);
            DB::commit();
            
            Alert::success('Tambah Testimoni Hidden Gem', 'Berhasil');
            return redirect()->route('activities.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Testimoni Trip', 'error' . $th->getMessage());
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

        $testimoni = review_hidden_gem::where('id', '=', $id)->first();
        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();

        return view('admin.hidden_gem.editTestimoni', compact('testimoni', 'notifications','notificationsCount'));
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
        
        $validator = Validator::make(
            $request->all(),
            [
                'name'         =>  'required|string|max:100',
                'description'   => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $testimoni = review_hidden_gem::where('id', '=', $id)->first();
            $testimoni->update([
                'name'                      =>  $request->name,
                'description'               =>  $request->description,
            ]);
           
            DB::commit();
            
            Alert::success('Edit Testimoni Hidden Gem', 'Berhasil');
            return redirect()->route('activities.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Testimoni Trip', 'error' . $th->getMessage());
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
        $testimoni = review_hidden_gem::where('id', '=', $id)->first();
        try {
            $testimoni->delete();
            Alert::success('Delete Testimoni Trip', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Testimoni Trip', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    private function timeAgo($time_ago)
    {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;

        switch ($time):
                // seconds
            case $time <= 60;
                return 'lessthan a minute ago';
                // minutes
            case $time >= 60 && $time < 3600;
                return (round($time / 60) == 1) ? 'a minute' : round($time / 60) . ' minutes ago';
                // hours
            case $time >= 3600 && $time < 86400;
                return (round($time / 3600) == 1) ? 'a hour ago' : round($time / 3600) . ' hours ago';
                // days
            case $time >= 86400 && $time < 604800;
                return (round($time / 86400) == 1) ? 'a day ago' : round($time / 86400) . ' days ago';
                // weeks
            case $time >= 604800 && $time < 2600640;
                return (round($time / 604800) == 1) ? 'a week ago' : round($time / 604800) . ' weeks ago';
                // months
            case $time >= 2600640 && $time < 31207680;
                return (round($time / 2600640) == 1) ? 'a month ago' : round($time / 2600640) . ' months ago';
                // years
            case $time >= 31207680;
                return (round($time / 31207680) == 1) ? 'a year ago' : round($time / 31207680) . ' years ago';

        endswitch;
    }
}

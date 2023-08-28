<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\Hashtag;
use App\Models\Hidden_gem;
use App\Models\hidden_gem_hashtag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\logPayments;
use App\Models\PickHiddenGem;
use App\Models\Place_categories;
use App\Models\Trip_cities_hidden_gem_hashtag;
use DataTables;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Str;

class HiddenGemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Hidden_gem::orderBy('title')->get();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        

        return view('admin.hidden_gem.index', compact('datas', 'notifications', 'notificationsCount',));
    }

    public function tableHiddenGem(Request $request)
    {
        if($request->ajax())
        {
            $datas = Hidden_gem::orderBy('title')->get();

            return DataTables::of($datas)
            ->addIndexColumn()
           
            
            ->addColumn('action', function ($user) {


                return '
                <a href="'.route('activities.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                
                <a href="'.route('activities.destroy', $user->id).'" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>';

               
            })
           
            ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        $cities = Place_categories::with('descendants')->get();

        $destinations = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);


        return view('admin.hidden_gem.create', [
            'statuses' => $this->statuses(),
            'orders' => $this->orders(),
            'checkboxes' => $this->checkbox(),
            'notifications'=> $notifications,
            'notificationsCount'=> $notificationsCount,
            'destinations' => $destinations
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
        // $request['slug'] = Str::slug($request->title);
        $request['description'] = strip_tags($request->description);
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'slug' => 'required|string|unique:hidden_gems,slug',
                // 'status' => 'required',
                'image_desktop' => 'required',
                'banner'  => 'required',
                'description'   => 'required',
                'hashtag'       => 'required',
                'destination'   => 'required'  
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert
        DB::beginTransaction();
        try {
            $post = Hidden_gem::create([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'description1'      => $request->description,
                'image_desktop'     => $request->image_desktop,
                'image_mobile'      => $request->image_desktop,
                'places_id'         => $request->destination,
                'status'            => 'publish',
                'banner'            => $request->banner
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
        $hiddem_gem = Hidden_gem::whereId($id)->with(['place', 'hidden_hashtag'])->get(['id','title','slug','description1','image_desktop','image_mobile', 'places_id','status','banner']);
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        $destinations = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);


        return view('admin.hidden_gem.edit',[
            'hidden_gem' => $hiddem_gem[0],
            'statuses'  => $this->statuses(),
            'checkboxes' => $this->checkbox(),
            'notifications'=> $notifications,
            'notificationsCount'=> $notificationsCount,
            'destinations' => $destinations
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

        $request['slug'] = Str::slug($request->title);
        // $request['description'] = strip_tags($request->description);
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'slug' => 'required',
                // 'status' => 'required',
                'image_desktop' => 'required',
                // 'image_mobile'  => 'required',
                'description'   => 'required',
                'hashtag'       => 'required',
                'banner'        => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        //// proses insert
        DB::beginTransaction();
        try {
            $post = Hidden_gem::whereId($id);
            $post ->update([
                'title'             => $request->title,
                'slug'              => $request->slug,
                'description1'      => $request->description,
                'image_desktop'     => $request->image_desktop,
                'image_mobile'      => $request->image_desktop,
                'places_id'         => $request->destination,
                'status'            => 'publish',
                'banner'            => $request->banner
            ]);

            DB::commit();
            $hidden_gem_id = Hidden_gem::where('title', '=', $request->title)->get();
            
           ///  fungsi belum jalan
            // $result=hidden_gem_hashtag::whereIn('id',$request->invisible)->get()->pluck('hashtag_id');
            // return $result;

            // $trip_cities_hashtag = Trip_cities_hidden_gem_hashtag::whereIn('hashtag_id',$result)->get();
            // return $trip_cities_hashtag;

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
        try {
            /// temukan list hidden_gem_hashtag dengan id yang dikirimkan parameter
            $findHidden_gemHashtagId = hidden_gem_hashtag::where('hidden_gem_id', $id)->get(['id'])->pluck('id');

            //// jika ada lebih dari sama dengan 1 data maka hapus 
            if(count($findHidden_gemHashtagId)>=1){
                hidden_gem_hashtag::whereIn('id', $findHidden_gemHashtagId)->delete();
            }

            /// selanjutnya

            //// mendapatkan list pickHiddenGem dengan id yang dikirimkan parameter
            $findPickHiddenGemId = PickHiddenGem::where('hidden_gem_id', $id)->get(['id'])->pluck('id');
            // return $findPickHiddenGemId;

            //// jika data yang didapatkan lebih dari 1 maka hapus 
            if(count($findHidden_gemHashtagId) >= 1){
                PickHiddenGem::whereIn('id', $findPickHiddenGemId)->delete();
            }

            /// selanjutnya

            //// mendapatkan data trip_cities_hidden_gem_hastag sesuai id yang dikirimkan parameter
            $findTrip_cities_hidden_hashtagId = Trip_cities_hidden_gem_hashtag::where('hidden_gem_id', $id)->get(['id'])->pluck('id');
            // return $findTrip_cities_hidden_hashtagId;

            //// jika data yang didapat lebih dari 1 maka hapus data trip_cities_hidden_gem_hashtag
            if(count($findTrip_cities_hidden_hashtagId)>=1){
                Trip_cities_hidden_gem_hashtag::whereIn('id', $findTrip_cities_hidden_hashtagId)->delete();
            }
            
            ///selanjutnya

            //// hapus data hidden_gem
            $hiddem_gem = Hidden_gem::whereId($id);
            
            $hiddem_gem->delete();

            /// selanjutnya

            //// kirim alert success 
            Alert::success('Delete Hidden Gem /Activity', 'Berhasil');
        } catch (\throwable $th){

            //// jika gagal kirim alert error
            Alert::error('Delete Hidden Gem /Activity', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }

    public function images($id)
    {
        $data = Hidden_gem::where('id', '=', $id)->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.hidden_gem.images', compact('data', 'notifications', 'notificationsCount'));
    }

    public function updateImages(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'banner'         =>  'required',
            ]
        );

        //// jika gagal di validasi maka akan kembali kehalaman edit

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try {
            //// temukan trip dengan id di parameter

            $post = Hidden_gem::whereId($id);

            //// update trip tersebut

            $post->update([
                'banner'         =>  $request->banner,
            ]);

            Alert::success('Edit Trip', 'Berhasil');
            return redirect()->route('activities.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Trip', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
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

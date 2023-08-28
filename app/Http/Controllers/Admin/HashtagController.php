<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\hidden_gem_hashtag;
use App\Models\logPayments;
use App\Models\Place_categories;
use App\Models\Trip_cities_hidden_gem_hashtag;
use Illuminate\Support\Str;

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
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.hashtag.index', compact('datas', 'notifications', 'notificationsCount'));
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
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.hashtag.create', [
            'statuses' => $this->statuses(),
            'orders' => $this->orders(),
            'notifications' => $notifications,
            'notificationsCount' => $notificationsCount
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
        $request['slug'] = Str::slug($request->title);
        $slug = $request['slug'];

        $latestSlug =
            Hashtag::whereRaw("slug = '$request->slug' or slug LIKE '$request->slug-%'")
            ->latest('id')
            ->value('slug');
        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);
            Alert::error('Tambah Hashtag',  'Hashtag sudah tersedia');
            return redirect()->back()->withInput($request->all());

            $number = intval(end($pieces));

            $slug .= '-' . ($number + 1);
        }



        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'slug' => 'required|string|',
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
                'slug'          => $slug,
                'description'   => $request->description,
                'status'        => 'publish',
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
        $hashtag = Hashtag::whereId($id)->get();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.hashtag.edit', [
            'hashtag'   => $hashtag[0],
            'statuses'  => $this->statuses(),
            'notifications' => $notifications,
            'notificationsCount' => $notificationsCount
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

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'slug' => 'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try {
            $post = Hashtag::where('id', '=', $id);

            $post->update([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'description'   => $request->description,
                'status'        => 'publish',
            ]);

            Alert::success('Edit Hashtag', 'Berhasil');
            return redirect()->route('hashtag.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Hashtag', 'error' . $th->getMessage());
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
    public function destroy(Hashtag $hashtag)
    {
        try {
            //// mendapatkan list hidden_gem_hashtag dengan id yang dikirimkan parameter
            $findId = hidden_gem_hashtag::where('hashtag_id', $hashtag->id)->get(['id'])->pluck('id');

            //// jika data lebih dari 1 maka hapus list hidden_gem_hashtag
            if (count($findId) >= 1) {
                hidden_gem_hashtag::whereIn('id', $findId)->delete();
            }

            // selanjutnya

            //// temukan list trip_cities_hidden_gem_hashtag dengan id yang dikirimkan parameter
            $findTripHiddenHashtag = Trip_cities_hidden_gem_hashtag::where('hashtag_id', $hashtag->id)->get(['id'])->pluck('id');

            ///// hapus tabel trip cities hidden_gem_hashtag yang memuat hashtag 
            if (count($findTripHiddenHashtag) >= 1) {
                $findTripHiddenHashtag->delete();
            }

            /// selanjutnya

            //// hapus hashtag dengan id sesuai dengan parameter yang dikirim
            $hashtag->delete();

            /// selanjutnya

            //// kirim pemberitahuan dan kembali ke halaman sebelumnya 
            Alert::success('Delete Hashtag', 'Berhasil');
        } catch (\throwable $th) {

            //// fail akses hidden gem
            Alert::error('Delete Hashtag', 'error' . $th->getMessage());
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

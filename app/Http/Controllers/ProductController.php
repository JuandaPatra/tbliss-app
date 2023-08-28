<?php

namespace App\Http\Controllers;

use App\Models\Hashtag;
use App\Models\Place_categories;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use DataTables;
use App\Models\Hashtag_place_trip;
use App\Models\Hidden_gem;
use App\Models\logPayments;
use App\Models\Place_trip_categories;
use App\Models\place_trip_categories_cities;
use App\Models\ReviewTrip;
use App\Models\Trip_categories;
use App\Models\Trip_exclude;
use App\Models\Trip_includes;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Trip_categories::where('status', '=', 'publish')->orderBy('date_from', 'ASC')->get();
        foreach($datas as $data){
            $data['date_from'] = date('d M Y', strtotime($data->date_from));
            $data['date_to'] = date('d M Y', strtotime($data->date_to));
        }
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.products.index', compact('datas', 'notifications', 'notificationsCount'));
    }


    public function tableProduct(Request $request)
    {
        if ($request->ajax()) {
            $datas = Trip_categories::where('status', '=', 'publish')->orderBy('date_from', 'ASC')->get();
            foreach($datas as $data){
                $data['date_from'] = date('d M Y', strtotime($data->date_from));
                $data['date_to'] = date('d M Y', strtotime($data->date_to));
            }
            return Datatables::of($data)
            ->addIndexColumn()
            
            ->addColumn('action', function ($user) {


                return '
                <a href="'.route('testimoni-trip.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                
                <a href="'.route('testimoni-trip.destroy1', $user->id).'" class="btn btn-xs btn-danger deleteUser"><i class="fa fa-trash"></i> Delete</a>
                ';

                
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
        //// controller tambah trip

        //// ambil negara dan kota
        $negara = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }


        return view('admin.products.create', [
            'statuses' => $this->statuses(),
            'destinations' => $negara,
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
        $b = str_replace('.', '', $request->price);
        $int_value = (int) $b;
        $dp_price = str_replace('.', '', $request->dp_price);
        $installment1 = str_replace('.', '', $request->installment1);
        $installment2 = str_replace('.', '', $request->installment2);
        $installment3 = str_replace('.', '', $request->installment3);
        $visa         = str_replace('.', '', $request->visa);
        $tipping         = str_replace('.', '', $request->tipping);
        $total_tipping         = str_replace('.', '', $request->total_tipping);

        $validator = Validator::make(
            $request->all(),
            [
                'title'         =>  'required|string|max:100',
                'slug'          =>  'required|string|unique:trip_categories,slug',
                'description'   =>  'required',
                'banner'        => 'required',
                'thumbnail'     =>  'required',
                'itinerary'     =>  'required',
                'price'         =>  'required',
                'seat'          =>  'required',
                'day'           =>  'required',
                'night'         =>  'required',
                'link_g_drive'  =>  'required',
                'date_from'     =>  'required',
                'date_to'       =>  'required',
                
                'dp_price'      =>  'required',
                'installment1'  =>  'required',
                'installment2'  =>  'required',
                'visa'          =>  'required',
                'tipping'       =>  'required',
                'total_tipping' =>  'required',
                'prices_total' => 'required',
                'countries'     => 'required',
                'cities'        => 'required',

                // 'installment3'  =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Trip_categories::create([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
                'thumbnail'     =>  $request->thumbnail,
                'description'   =>  $request->description,
                'itinerary'     =>  $request->itinerary,
                'price'         =>  $int_value,
                'day'           =>  $request->day,
                'night'         =>  $request->night,
                'seat'          =>  $request->seat,
                'link_g_drive'  =>  $request->link_g_drive,
                'date_from'     =>  $request->date_from,
                'date_to'       =>  $request->date_to,
                'status'        =>  'publish',
                'dp_price'      =>  (int) $dp_price,
                'installment1'  =>  (int) $installment1,
                'installment2'  =>  (int) $installment2,
                'visa'          =>  (int) $visa,
                'tipping'       =>  (int) $tipping,
                'total_tipping' =>  (int) $total_tipping,
                'banner'        => $request->banner
            ]);
            DB::commit();
            $trip = Trip_categories::where('title', '=', $request->title)->get();

            foreach ($request->countries as $inputCountry) {
                try {
                    $post = Place_trip_categories::create([
                        'trip_categories_id'                => $trip[0]->id,
                        'place_categories_id'               => $inputCountry,
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Negara Tujuan Trip', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }

            foreach ($request->cities as $inputCity) {
                try {
                    $post = place_trip_categories_cities::create([
                        'trip_categories_id'                => $trip[0]->id,
                        'place_categories_id'               => $inputCity,
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Kota Tujuan Trip', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }

            // foreach($request->hashtag as $inputHashtag){
            //     try {
            //         $post = Hashtag_place_trip::create([
            //             'trip_categories_id'                => $trip[0]->id,
            //             'hashtag_id'                        => $inputHashtag,
            //         ]);
            //     } catch (\throwable $th) {
            //         DB::rollBack();
            //         Alert::error('Tambah Kota Tujuan Trip', 'error' . $th->getMessage());
            //         return redirect()->back()->withInput($request->all());
            //     } finally {
            //         DB::commit();
            //     }
            // }




            Alert::success('Tambah Benua', 'Berhasil');
            return redirect()->route('product.index');
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
        //// controller edit Trip 
        
        $trip = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,slug,title', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title,slug', 'hashtag_place_trip:id,hashtag_id,trip_categories_id', 'hashtag_place_trip.hashtag:id,title,slug',])->whereId($id)->first(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'link_g_drive', 'date_from', 'date_to', 'status', 'dp_price', 'installment1', 'installment2', 'installment3', 'visa', 'tipping', 'total_tipping','banner', 'trip_review', 'trip_star']);

        $tripTestimoni = ReviewTrip::where('categories_trip_id', '=', $id)->get();

        $negara = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);
        $hashtags = Hashtag::all(['id', 'title']);
        $total_price = $trip->price + $trip->visa + $trip->total_tipping;
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        
        return view('admin.products.edit', [
            'statuses'      => $this->statuses(),
            'destinations'  => $negara,
            'hashtags'      => $hashtags,
            'trip'          => $trip,
            'total_price'   => $total_price,
            'notifications' => $notifications,
            'notificationsCount' => $notificationsCount,
            'tripTestimoni' => $tripTestimoni
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        try {
            $product = Trip_categories::whereId($id);
            $product->update([
                'status'         =>  'deleted',
            ]);
            // $product->delete();
            Alert::success('Delete Product', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Product', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    public function include(Request $request, $slug)
    {
        $datas          = Trip_categories::where('id', '=', $slug)->first();
        $includes       =   Trip_includes::where('trip_cat_id', '=', $slug)->get(['id', 'title', 'slug', 'icon_image', 'trip_cat_id']);
        $excludes       =   Trip_exclude::where('trip_cat_id', '=', $slug)->get(['id', 'title', 'slug', 'icon_image', 'trip_cat_id']);
        $slug           =   $slug;
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        // return 'tes';

        return view('admin.products.includes', compact('datas', 'includes', 'excludes', 'slug', 'notifications', 'notificationsCount'));
    }
    public function images($id)
    {
        $data = Trip_categories::where('id', '=', $id)->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }


        return view('admin.products.images', [
            'statuses' => $this->statuses(),
            'data'  => $data,
            'notifications' => $notifications,
            'notificationsCount' => $notificationsCount
        ]);
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

            $post = Trip_categories::whereId($id);

            //// update trip tersebut

            $post->update([
                'banner'         =>  $request->banner,
            ]);

            Alert::success('Edit Trip', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Trip', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }
    public function pick_hidden_gem(Request $request, $slug)
    {
        // return $slug;
        // $cities = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gems_id','pick_hidden_gem.hidden_gems:id,title,image_desktop' ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);
        // $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id', ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);

        $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id', 'trip_categories_id']);
        $datas = Trip_categories::where('id', '=', $slug)->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        return view('admin.products.pickhiddengem', compact('cities', 'slug', 'datas', 'notifications', 'notificationsCount'));
    }

    public function choose(Request $request, $slug)
    {
        // $cities = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gems_id','pick_hidden_gem.hidden_gems:id,title,image_desktop' ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);
        // $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id', ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);

        $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop'])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id', 'trip_categories_id']);
        $country = Place_trip_categories::where('trip_categories_id', '=', $slug)->get();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.products.pickCityWithHiddenGems', compact('cities', 'slug', 'notifications', 'notificationsCount'));
    }

    public function updateTrip(Request $request, $id)
    {
        //// controler update Trip

        //// ubah string to number price
        $request['slug'] = Str::slug($request->title);
        $request['description'] = strip_tags($request->description);
        $b = str_replace('.', '', $request->price);
        $int_value = (int) $b;
        $dp_price = str_replace('.', '', $request->dp_price);
        $installment1 = str_replace('.', '', $request->installment1);
        $installment2 = str_replace('.', '', $request->installment2);
        $installment3 = str_replace('.', '', $request->installment3);
        $visa         = str_replace('.', '', $request->visa);
        $tipping         = str_replace('.', '', $request->tipping);
        $total_tipping         = str_replace('.', '', $request->total_tipping);

        ///validasi input form

        $validator = Validator::make(
            $request->all(),
            [
                'title'         =>  'required|string|max:100',
                'slug'          =>  'required',
                'description'   =>  'required',
                'thumbnail'     =>  'required',
                'banner'        =>  'required',
                'itinerary'     =>  'required',
                'price'         =>  'required',
                'day'           =>  'required',
                'night'         =>  'required',
                'link_g_drive'  =>  'required',
                'date_from'     =>  'required',
                'date_to'       =>  'required',
                
                'dp_price'      =>  'required',
                'installment1'  =>  'required',
                'installment2'  =>  'required',
                'visa'          =>  'required',
                'tipping'       =>  'required',
                'total_tipping' =>  'required'
            ]
        );

        //// jika gagal di validasi maka akan kembali kehalaman edit

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try {
            //// temukan trip dengan id di parameter

            $post = Trip_categories::whereId($id);

            //// update trip tersebut

            $post->update([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
                'thumbnail'     =>  $request->thumbnail,
                'description'   =>  $request->description,
                'itinerary'     =>  $request->itinerary,
                'price'         =>  $int_value,
                'day'           =>  $request->day,
                'night'         =>  $request->night,
                'seat'          =>  $request->seat,
                'link_g_drive'  =>  $request->link_g_drive,
                'date_from'     =>  $request->date_from,
                'date_to'       =>  $request->date_to,
                'status'        =>  'publish',
                'dp_price'      => (int) $dp_price,
                'installment1'  => (int) $installment1,
                'installment2'  => (int) $installment2,
                'visa'          =>  (int) $visa,
                'tipping'       =>  (int) $tipping,
                'total_tipping' =>  (int) $total_tipping,
                'banner'        => $request->banner
            ]);

            Alert::success('Edit Trip', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Trip', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    public function review($id)
    {

        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        $review = Trip_categories::whereId($id)->first();

        return view('admin.products.review', compact('id', 'notifications', 'notificationsCount', 'review'));
    }

    public function reviewAdd(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'trip_review'           =>  'required',
                'trip_star'             => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $updateTrip = Trip_categories::whereId($id);

            $post = $updateTrip->update([
                'trip_review'           =>  $request->trip_review,
                'trip_star'             => $request->trip_star,

            ]);
            DB::commit();

            Alert::success('Tambah Review', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Review', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    public function testimoni($id)
    {


        $data = ReviewTrip::where('categories_trip_id','=',$id)->get();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        return view('admin.products.testimoni' , compact('notifications', 'notificationsCount', 'id', 'data'));
    }

    public function testimoniAdd(Request $request, $id)
    {
        // return $request;
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
            $post = ReviewTrip::create([
                'name'                      =>  $request->name,
                'description'               =>  $request->description,
                'categories_trip_id'         => $id,
                
            ]);
            DB::commit();
            
            Alert::success('Tambah Testimoni Trip', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Testimoni Trip', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    public function editTestimoni($id)
    {
        $testimoni = ReviewTrip::where('id', '=', $id)->first();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        return view('admin.products.editTestimoni',compact('testimoni', 'notifications', 'notificationsCount'));

    }

    public function updateEditTestimoni(Request $request, $id)
    {

        $category = ReviewTrip::whereId($id)->first();
        
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

        $description = strip_tags($request->description);
        DB::beginTransaction();
        try {
            $testimoni = ReviewTrip::whereId($id);
            $post = $testimoni->update([
                'name'                          =>  $request->name,
                'description'                   =>  $description,
                'categories_trip_id'            =>  $category->categories_trip_id,
                
            ]);
            DB::commit();
            
            Alert::success('Update Testimoni Trip', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Update Testimoni', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }

    }

    public function deleteTestimoni($id)
    {
        $testimoni = ReviewTrip::where('id', '=', $id)->first();
        try {
            $testimoni->delete();
            Alert::success('Delete Testimoni Trip', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Testimoni Trip', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {


            $data = ReviewTrip::where('categories_trip_id','=',$request->id)->get();

            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('finish_date', function ($row) {
                //     $date = date("d F Y h:m", strtotime($row->created_at));
                //     return $date;
                // })
                // ->addColumn('roles', function ($user) {
                //     $roles = $user->roles->first()->name;
                //     // $rolef = $roles->name;
                //     return  ucfirst($roles);
                // })
                ->addColumn('action', function ($user) {


                    return '
                    <a href="'.route('testimoni-trip.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    
                    <a href="'.route('testimoni-trip.destroy1', $user->id).'" class="btn btn-xs btn-danger deleteUser"><i class="fa fa-trash"></i> Delete</a>
                    ';

                    // return '<div class="dropdown-menu">
                    //      <a class="dropdown-item" href="' . route('user-admin.edit', $user->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>             
                    //      <a class="dropdown-item" href="' . route('user-admin.destroy', $user->id) . '" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest("form").submit();return false;">
                    //         <i class="bx bx-trash me-1"></i>Delete
                    //     </a>
                         
                    //  </div>';
                })
                // ->addColumn('roles', function($row){
                //     $role = $row->roles[0]->name;
                //     return $role;
                // })
                ->make(true);
        }
    }


    private function statuses()
    {

        return [
            'draft' => 'draft',
            'publish' => 'publish',
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

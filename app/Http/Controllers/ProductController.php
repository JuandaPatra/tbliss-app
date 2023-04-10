<?php

namespace App\Http\Controllers;

use App\Models\Hashtag;
use App\Models\Place_categories;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Hashtag_place_trip;
use App\Models\Hidden_gem;
use App\Models\Place_trip_categories;
use App\Models\place_trip_categories_cities;
use App\Models\Trip_categories;
use App\Models\Trip_exclude;
use App\Models\Trip_includes;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Trip_categories::all();
        return view('admin.products.index', compact('datas'));
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

        return view('admin.products.create', [
            'statuses' => $this->statuses(),
            'destinations' => $negara,
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
        $b = str_replace('.', '', $request->price);
        $int_value = (int) $b;
        $dp_price = str_replace('.', '', $request->dp_price);
        $installment1 = str_replace('.', '', $request->installment1);
        $installment2 = str_replace('.', '', $request->installment2);
        $installment3 = str_replace('.', '', $request->installment3);

        $validator = Validator::make(
            $request->all(),
            [
                'title'         =>  'required|string|max:100',
                'slug'          =>  'required|string|unique:trip_categories,slug',
                'description'   =>  'required',
                'thumbnail'     =>  'required',
                'itinerary'     =>  'required',
                'price'         =>  'required',
                'day'           =>  'required',
                'night'         =>  'required',
                'link_g_drive'  =>  'required',
                'date_from'     =>  'required',
                'date_to'       =>  'required',
                'status'        =>  'required',
                'dp_price'      =>  'required',
                'installment1'  =>  'required',
                'installment2'  =>  'required',
                'installment3'  =>  'required',
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
                'status'        =>  $request->status,
                'dp_price'      => (int) $dp_price,
                'installment1'  => (int) $installment1,
                'installment2'  => (int) $installment2,
                'installment3'  => (int) $installment3,
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
 
        $trip = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,slug,title', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title,slug', 'hashtag_place_trip:id,hashtag_id,trip_categories_id', 'hashtag_place_trip.hashtag:id,title,slug'])->whereId($id)->first(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'link_g_drive', 'date_from', 'date_to', 'status','dp_price', 'installment1','installment2','installment3']);

        $negara = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);
        $hashtags = Hashtag::all(['id', 'title']);
        return view('admin.products.edit', [
            'statuses' => $this->statuses(),
            'destinations' => $negara,
            'hashtags' => $hashtags,
            'trip'     => $trip
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
        // return 'tes';
        // return $request->hashtags[0];

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
            $product->delete();
            Alert::success('Delete Product', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete Product', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    public function include(Request $request, $slug)
    {
        $datas          =   Trip_categories::all();
        $includes       =   Trip_includes::where('trip_cat_id', '=', $slug)->get(['id', 'title', 'slug', 'icon_image', 'trip_cat_id']);
        $excludes       =   Trip_exclude::where('trip_cat_id', '=', $slug)->get(['id', 'title', 'slug', 'icon_image', 'trip_cat_id']);
        $slug           =   $slug;
        return view('admin.products.includes', compact('datas', 'includes', 'excludes', 'slug'));
    }
    public function images(Request $request)
    {
        return $request;
    }
    public function pick_hidden_gem(Request $request, $slug)
    {
        // return $slug;
        // $cities = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gems_id','pick_hidden_gem.hidden_gems:id,title,image_desktop' ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);
        // $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id', ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);

        // $cities = place_trip_categories_cities::all();
        $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id', 'trip_categories_id']);

        // return $cities;

        return view('admin.products.pickhiddengem', compact('cities', 'slug'));
    }

    public function choose(Request $request, $slug)
    {
        // return $slug;
        // $cities = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gems_id','pick_hidden_gem.hidden_gems:id,title,image_desktop' ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);
        // $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop','pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id', ])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id','trip_categories_id']);

        // $cities = place_trip_categories_cities::all();
        $cities = place_trip_categories_cities::with(['place_categories:id,title', 'place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop'])->where('trip_categories_id', '=', $slug)->get(['id', 'place_categories_id', 'trip_categories_id']);
        $country = Place_trip_categories::where('trip_categories_id', '=', $slug)->get();
        // return $country;
        // return $cities;
        return view('admin.products.pickCityWithHiddenGems', compact('cities', 'slug'));
    }

    public function updateTrip(Request $request, $id)
    {
        //// controler update Trip
        
        //// ubah string to number price

        $b = str_replace('.', '', $request->price);
        $int_value = (int) $b;

        ///validasi input form

        $validator = Validator::make(
            $request->all(),
            [
                'title'         =>  'required|string|max:100',
                'slug'          =>  'required',
                'description'     =>  'required',
                'thumbnail'     =>  'required',
                'itinerary'     =>  'required',
                'price'         =>  'required',
                'day'           =>  'required',
                'night'         =>  'required',
                'link_g_drive'  =>  'required',
                'date_from'     =>  'required',
                'date_to'       =>  'required',
                'status'        =>  'required'
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
                'status'        =>  $request->status,
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

    private function statuses()
    {

        return [
            'draft' => 'draft',
            'publish' => 'publish',
        ];
    }
}

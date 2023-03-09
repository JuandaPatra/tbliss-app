<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use App\Models\hidden_gem_hashtag;
use App\Models\PickHiddenGem;
use App\Models\Place_categories;
use App\Models\place_trip_categories_cities;
use App\Models\Trip_categories;
use App\Models\Trip_cities_hidden_gem_hashtag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchTripController extends Controller
{
    public function index()
    {
        // return 'tes';
        // $region = Place_categories::with(['children'])->get();
        // return $region;
        // $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId(6)->get(['id','title']);

        //// list negara
        $result = Place_categories::with(['children'])->where('parent_id', '=', null)->get();

        //// list trip berdasarkan kota
        // $citiesTrip = place_trip_categories_cities::groupBy('place_categories_id')->selectRaw('count(*) as total')->with(['place_categories'])->get();
        // $citiesTrip = place_trip_categories_cities::with(['place_categories'])->groupBy('place_categories_id')->get();

        // $citiesTrip = place_trip_categories_cities::select([

        //     // 'place_trip_categories_cities.*',

        //     DB::raw('count(place_trip_categories_cities.trip_categories_id) as total',),

        // ]
        //     // 'place_trip_categories_cities.*',


        // )
        // ->leftJoin('place_categories', 'place_categories.id','=','place_trip_categories_cities.place_categories_id')
        // ->where('place_categories.parent_id', 6)
        // ->groupBy('place_categories_id')
        // ->get();

        // $citiesTrip = DB::table('place_trip_categories_cities')
        //     ->leftJoin('place_categories', 'place_categories.id', '=', 'place_trip_categories_cities.place_categories_id')
        //     ->select(DB::raw('count(place_trip_categories_cities.trip_categories_id) as total'))
        //     ->where('place_categories.parent_id', 6)
        //     ->groupBy('place_categories_id')
        //     ->get();
        // $citiesTrip = DB::select(DB::raw('select *, count(trip_categories_id) from place_trip_categories_cities  ptcc
        // join place_categories pc on
        // ptcc.place_categories_id = pc.id
        // where pc.parent_id=6
        // group by place_categories_id
        // ;'));
        // return $citiesTrip;

        // $searchTrips = Trip_categories::with(['place_trip_categories_cities', 'place_trip_categories_cities.place_categories', 'place_trip_categories_cities.pick_hidden_gem' ,'place_trip_categories_cities.pick_hidden_gem.hidden_gems', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems.hidden_hashtag', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag' ])->get();


        // $searchTrips = Trip_categories::whereHas('place_trip_categories_cities.pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag',function($query){
        //     $query->leftJoin('trip_categories', 'trip_categories.id', '=', 'place_trip_categories_cities.trip_categories_id')->where('hashtag.id','=',9);
        //     // $query->where('hashtag.id','=',9);
        // })->get();

        // $user_info = place_trip_categories_cities::groupBy('place_categories_id')->select('place_trip_categories_cities', DB::raw('count(place_categories_id) as total'))->get();
        // return $user_info;

        $tripByCity = place_trip_categories_cities::select(DB::raw('count(*) as user_count'),'place_categories_id')
               ->with([
                'place_categories:id,title,slug,images,parent_id'
               ])
              ->groupBy('place_categories_id')
              ->inRandomOrder()
              ->limit(4)
              ->get();
        // return $tripByCity;

        ///////////////////////// true search

        $searchTrips = hidden_gem_hashtag::whereIn('hashtag_id', [2,7])->get(['hidden_gem_id'])->pluck(['hidden_gem_id']);
        // $searchTrips = hidden_gem_hashtag::whereIn('hashtag_id', [2,7])->get();
        // return $searchTrips;

        $findTrips = PickHiddenGem::whereIn('hidden_gem_id', $searchTrips)->whereIn('place_categories_id', [8])->get(['place_categories_categories_cities_id'])->pluck('place_categories_categories_cities_id');

        $results = Trip_categories::with(['place_trip_categories_cities:id,trip_categories_id,place_categories_id','place_trip_categories_cities.place_categories:id,title'])->whereIn('id', $findTrips)->get(['id','title','slug','thumbnail','price','day','night','seat']);
        // return $results;
        // return $findTrips;


        ///////////////////////// end true search


        // $cobaHashtag = Hashtag::with(['hidden_gem_hashtag','hidden_gem_hashtag.hidden_gem'])->whereId(1)->get();
        // return $cobaHashtag;

        // $cobaHashtag2 = place_trip_categories_cities::with(['pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'])->first(['id', 'trip_categories_id', 'place_categories_id']);
        // // return $cobaHashtag2;

        // $cobaHashtag3 = place_trip_categories_cities::query()->whereHas('pick_hidden_gem.hidden_gems',fn($query)=>$query->where(''))->get();
        // return $cobaHashtag3;





        // $hashtag = place_trip_categories_cities::with(['pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'])->where('place_categories_id', 7)->first(['id', 'trip_categories_id', 'place_categories_id']);
        // return $hashtag;


        // $coba = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id','pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'   ])->where('place_categories_id', 13)->get();
        // return $coba;

        // $hasil = Place_categories::with(['children'])->whereId('6')->get();
        // $hasil = Trip_categories::all();

        // return $hasil;
        // $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId(6)->get(['id','title']);
        // return $result;



        // $hashtag = PickHiddenGem::leftJoin('hidden_gem_hashtags', 'pick_hidden_gems.hidden_gem_id', '=', 'hidden_gem_hashtags.hidden_gem_id')->leftjoin('hashtags', 'pick_hidden_gems.hidden_gem_id','=', 'hashtags.id')->where('pick_hidden_gems.place_categories_id','=', 7)->get();
        // return $hashtag;


        // return $result;

        return view('web.details.index', compact('result','tripByCity'));
    }

    public function getCities($id)
    {
        // $cities = decrypt($id);

        $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId($id)->first(['id', 'title']);

        // return $data;

        return response()->json($result);
    }

    public function getHashtag($id)
    {
        // return $id;
        $hashtag = place_trip_categories_cities::with(['pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'])->where('place_categories_id', $id)->first(['id', 'trip_categories_id', 'place_categories_id']);

        // return $hashtag;
        $result = [];
        foreach ($hashtag->pick_hidden_gem as $trip) {
            foreach ($trip->hidden_gems->hidden_hashtag as $hidden_gems) {
                array_push($result, $hidden_gems->hashtag);
            }
        }
        $resultfilter = array_unique($result);
        // return $resultfilter;
        // return response()->json('tes');

        return response()->json($result);

        // return $hashtag;
    }

    public function searchtrip(Request $request)
    {
        // return response()->json($request->post);
        $trips = DB::table('trip_cities_hidden_gem_hashtags')
            ->leftJoin('trip_categories', 'trip_cities_hidden_gem_hashtags.trip_categories_id', '=', 'trip_categories.id')
            // ->leftJoin('place_trip_categories_cities', 'trip_categories.id', '=', 'place_trip_categories_cities.trip_categories_id')
            // ->select(['trip_cities_hidden_gem_hashtags.*', 'trip_categories.title', 'trip_categories.slug', 'trip_categories.price','trip_categories.seat','trip_categories.day','trip_categories.night', 'trip_categories.thumbnail', 'trip_categories.itinerary'])
            // ->select(['trip_cities_hidden_gem_hashtags.id'])
            ->whereIn('hashtag_id', $request->post)
            ->get();
        $trips->unique('trip_categories_id');
        // $getArray = (array) $trips->unique('trip_categories_id');

        // $allTrip = Trip_cities_hidden_gem_hashtag::whereIn('hashtag_id', $request->post)->get();

        $cobaTrip = [];
        foreach ($trips->unique('trip_categories_id') as $tes) {
            array_push($cobaTrip, $tes->id);
        }

        // return $cobaTrip;
        $allTrip = Trip_categories::with(['place_trip_categories_cities', 'place_trip_categories_cities.place_categories'])->whereIn('id', $cobaTrip)->get();

        return response()->json($allTrip);
        // return response()->json($trips->unique('trip_categories_id'));
        $shares = DB::table('shares')
            ->join('users', 'users.id', '=', 'shares.user_id')
            ->join('followers', 'followers.user_id', '=', 'users.id')
            ->where('followers.follower_id', '=', 3)
            ->get();
    }
}

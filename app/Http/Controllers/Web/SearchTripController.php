<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use App\Models\PickHiddenGem;
use App\Models\Place_categories;
use App\Models\place_trip_categories_cities;
use App\Models\Trip_categories;
use Illuminate\Http\Request;

class SearchTripController extends Controller
{
    public function index()
    {
        // return 'tes';
        // $region = Place_categories::with(['children'])->get();
        // return $region;
        // $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId(6)->get(['id','title']);
        $result = Place_categories::with(['children'])->where('parent_id', '=', null)->get();

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

        return view('web.details.index', compact('result'));
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

        return response()->json($resultfilter);

        // return $hashtag;
    }

    public function searchTrip()
    {
        $trip = DB::table('trip')
                ->join('')
        $shares = DB::table('shares')
            ->join('users', 'users.id', '=', 'shares.user_id')
            ->join('followers', 'followers.user_id', '=', 'users.id')
            ->where('followers.follower_id', '=', 3)
            ->get();
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
        $result= Place_categories::with(['children'])->where('parent_id', '=', null)->get();

        // $coba = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id','pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'   ])->where('place_categories_id', 13)->get();
        // return $coba;

        // $hasil = Place_categories::with(['children'])->whereId('6')->get();
        // $hasil = Trip_categories::all();

        // return $hasil;
        // $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId(6)->get(['id','title']);
        // return $result;
        return view('web.details.index',compact('result'));
    }

    public function getCities($id)
    {
        // $cities = decrypt($id);

        $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId($id)->first(['id','title']);
        
        // return $data;

        return response()->json($result);
    }

    public function getHashtag()
    {
        $hashtag = place_trip_categories_cities::with(['place_categories:id,title','place_categories.hidden_gem:places_id,id,title,image_desktop', 'pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id','pick_hidden_gem.hidden_gems:id,title,image_desktop', 'pick_hidden_gem.hidden_gems.hidden_hashtag:id,hidden_gem_id,hashtag_id',  'pick_hidden_gem.hidden_gems.hidden_hashtag.hashtag:id,title,slug'   ])->where('place_categories_id', 7)->get();
        // return $coba;
        return response()->json($hashtag);
    }
}

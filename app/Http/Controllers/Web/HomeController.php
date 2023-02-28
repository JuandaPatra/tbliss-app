<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Hidden_gem;
use App\Models\Place_categories;
use App\Models\Place_trip_categories;
use App\Models\Trip_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index()
    {
        // $country = Place_categories::whereId(6)->where('status','publish')->first();
        // $trip1 = Place_trip_categories::where('place_categories_id',4)->get();
        // return $trip1;
        // $trips = Trip_categories::all(['id','title','slug','price', 'day', 'night', 'date_from', 'date_to','thumbnail','seat']);
        // $hiddenGem = Hidden_gem::where('status','publish')->limit(8)->get(["id", "title", "slug", 'places_id', 'image_desktop', 'image_mobile']);
        // return $hiddenGem;
        // return $trips;
        // return view('web.home.index');

        // return redirect()

        // $coba = Place_trip_categories::with(['place_categories'])->where('place_categories_id', 6)->get();
        // return $country;
        // return view('web.home.index',compact('trips','country'));
        
        $id = encrypt(6);
        return redirect()->route('home.country', $id);
    }

    public function country($id)
    {
        $slug = decrypt($id);
        $country = Place_categories::whereId($slug)->where('status','publish')->first();
        $trips = Trip_categories::all(['id','title','slug','price', 'day', 'night', 'date_from', 'date_to','thumbnail','seat']);
        // return $country;

        $coba = Place_trip_categories::with(['place_categories'])->where('place_categories_id', $slug)->get();
        return view('web.home.index',compact('trips','country'));
    }

    public function detail($id, $trip)
    {
        // return $trip;
        $trueId = decrypt($id);
        $trueTrip = decrypt($trip);
        // return $trueTrip;
        $detailTrip = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id','place_trip_categories.place_categories:id,title,slug','place_trip_categories_cities:id,trip_categories_id,place_categories_id','place_trip_categories_cities.place_categories:id,title','place_trip_categories_cities.pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id','place_trip_categories_cities.pick_hidden_gem.hidden_gems:id,image_desktop,image_mobile', 'hashtag_place_trip',])->whereId($trueTrip)->where('status','publish')->first(['id','title','slug', 'thumbnail','description','itinerary','price','day','night','seat','link_g_drive','date_from','date_to']);
        // return $detailTrip;

        $otherTrips = Trip_categories::where('id','!=',$trueTrip)->get(['id','title','slug','price', 'day', 'night', 'date_from', 'date_to','thumbnail','seat']);
        // return $otherTrips;
        return view('web.detailtrip.index',compact('detailTrip', 'otherTrips', 'id', 'trip'));
    }
}

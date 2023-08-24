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
        /**
         * list negara di kolom biru
         */
        $result = Place_categories::with(['children'])->where('parent_id', '=', null)->get();


        /**
         * list trip
         */
        $trips = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,title,slug', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title', 'place_trip_categories_cities.pick_hidden_gem:place_categories_categories_cities_id,hidden_gem_id', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems:id,title'])->where('date_from', '>', date("Y-m-d", time() + 3600 * 24 * 1))->where('status', '=', 'publish')->get(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'date_from', 'date_to']);

        /**
         * list trip berdasarkan kota
         */
        $tripByCity = place_trip_categories_cities::select(DB::raw('count(*) as user_count'), 'place_categories_id')
            ->with([
                'place_categories:id,title,slug,images,parent_id,images2'
            ])
            ->groupBy('place_categories_id')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        ///////////////////////// true search


        $searchTrips = hidden_gem_hashtag::whereIn('hashtag_id', [2, 7])->get(['hidden_gem_id'])->pluck(['hidden_gem_id']);


        $findTrips = PickHiddenGem::whereIn('hidden_gem_id', $searchTrips)->whereIn('place_categories_id', [8])->get(['place_categories_categories_cities_id'])->pluck('place_categories_categories_cities_id');

        // salah 
        // return $findTrips;

        $results = Trip_categories::with(['place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title'])->whereIn('id', $findTrips)->get(['id', 'title', 'slug', 'thumbnail', 'price', 'day', 'night', 'seat']);


        ///////////////////////// end true search
        /**
         * get list cities in Korea
         */
        $getCities = Place_categories::with(['children:id,title,slug,parent_id'])->where('title', '=', 'korea')->first(['id', 'slug', 'title', 'parent_id']);
        $cityArray = $getCities->children;



        /**
         * list hashtag
         */

        $hashtag = PickHiddenGem::leftJoin('hidden_gem_hashtags', 'pick_hidden_gems.hidden_gem_id', '=', 'hidden_gem_hashtags.hidden_gem_id')->leftjoin('hashtags', 'pick_hidden_gems.hidden_gem_id', '=', 'hashtags.id')->where('pick_hidden_gems.place_categories_id', '=', 7)->get();
        $hashtags = $hashtag->unique();


        foreach($trips as $trip){
            
            if($trip->place_trip_categories_cities->count() !=0 ){
                
                $trip['hitung'] = $trip->place_trip_categories_cities->count();

            }else{
                $trip['hitung'] = $trip->place_trip_categories_cities->count();
            }

        }



        return view('web.details.index', compact('result', 'tripByCity', 'trips', 'cityArray', 'hashtags'));
    }

    public function getCities($id)
    {

        $result = Place_categories::with(['children:id,title,slug,parent_id'])->whereId($id)->first(['id', 'title']);


        return response()->json($result);
    }

    public function getHashtag($id)
    {
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
        if ($request->cities) {
            $trips = place_trip_categories_cities::with(['place_categories',])->whereIn('place_categories_id', $request->cities)->get();

            $tripsRes = place_trip_categories_cities::with(['place_categories',])->whereIn('place_categories_id', $request->cities)->get(['trip_categories_id', 'place_categories_id'])->pluck('trip_categories_id');

            $uniqueTripsRes = $tripsRes->unique();

            // $trips = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,title,slug', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title', 'place_trip_categories_cities.pick_hidden_gem:place_categories_categories_cities_id,hidden_gem_id', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems:id,title'])->whereIn('id', $uniqueTripsRes)->where('status', '=', 'publish')->get(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'date_from', 'date_to']);

            $trips = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,title,slug', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title', 'place_trip_categories_cities.pick_hidden_gem:place_categories_categories_cities_id,hidden_gem_id', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems:id,title'])->whereIn('id', $uniqueTripsRes)->where('date_from', '>', date("Y-m-d", time() + 3600 * 24 * 1))->where('status', '=', 'publish')->get(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'date_from', 'date_to']);




            foreach ($trips as $trip) {

                //ganti format tanggal
                $trip['date_from'] = date('d', strtotime($trip->date_from));
                $trip['date_to'] = date('d M Y', strtotime($trip->date_to));

                if ($trip->place_trip_categories_cities->count() >= 1) {
                    $citiesPick = '';
                    $hidg = '';
                    foreach ($trip->place_trip_categories_cities as $cities) {
                        if ($cities->count() > 1) {
                            if ($cities->pick_hidden_gem->count() >= 1) {
                                foreach ($cities->pick_hidden_gem as $hg) {
                                    $hidg =  $hidg . '<p>' . $hg->hidden_gems->title
                                        . '</p>';
                                }
                            }
                        }
                    }
                }

                if ($trip->place_trip_categories_cities->count() == 1) {
                    $citiesPick = $trip->place_trip_categories_cities[0]->place_categories->title;
                } else {
                    for ($i = 0; $i < $trip->place_trip_categories_cities->count(); $i++) {
                        if ($i == 0) {
                            $citiesPick =  $trip->place_trip_categories_cities[$i]->place_categories->title . '-';
                        } else if ($i == $trip->place_trip_categories_cities->count() - 1) {
                            $citiesPick = $citiesPick . $trip->place_trip_categories_cities[$i]->place_categories->title;
                        } else if ($i != $trip->place_trip_categories_cities->count() - 1) {
                            $citiesPick = $citiesPick . '-' . $trip->place_trip_categories_cities[$i]->place_categories->title . '-';
                        }
                    }
                }

                $trip['hg'] = $hidg;
                $trip['destinationCities'] = $citiesPick;
            }
            return $trips;
        } else {
            $trips = DB::table('trip_cities_hidden_gem_hashtags')
                ->leftJoin('trip_categories', 'trip_cities_hidden_gem_hashtags.trip_categories_id', '=', 'trip_categories.id')
                // ->leftJoin('place_trip_categories_cities', 'trip_categories.id', '=', 'place_trip_categories_cities.trip_categories_id')
                // ->select(['trip_cities_hidden_gem_hashtags.*', 'trip_categories.title', 'trip_categories.slug', 'trip_categories.price','trip_categories.seat','trip_categories.day','trip_categories.night', 'trip_categories.thumbnail', 'trip_categories.itinerary'])
                // ->select(['trip_cities_hidden_gem_hashtags.id'])
                ->whereIn('hashtag_id', $request->post)
                ->get();
            $trips->unique('trip_categories_id');
            // $getArray = (array) $trips->unique('trip_categories_id');
        }

        // $allTrip = Trip_cities_hidden_gem_hashtag::whereIn('hashtag_id', $request->post)->get();

        $cobaTrip = [];
        foreach ($trips->unique('trip_categories_id') as $tes) {
            array_push($cobaTrip, $tes->id);
        }

        $allTrip = Trip_categories::with(['place_trip_categories_cities', 'place_trip_categories_cities.place_categories'])->whereIn('id', $cobaTrip)->where('date_from', '>', date("Y-m-d", time() + 3600 * 24 * 1))->get();





        foreach ($allTrip as $trip) {
            $trip['date_from'] = date('d', strtotime($trip->date_from));
            $trip['date_to'] = date('d M Y', strtotime($trip->date_to));
            $trip['cities'] =  '';


            for ($i = 0; $i < count($trip['place_trip_categories_cities']); $i++) {
                if (count($trip['place_trip_categories_cities']) == 1) {
                    $trip['cities'] = $trip['cities'] . '' . $trip['place_trip_categories_cities'][$i]['place_categories']['title'];
                } else {
                    if ($i == count($trip['place_trip_categories_cities']) - 1) {
                        $trip['cities'] = $trip['cities'] . '' . $trip['place_trip_categories_cities'][$i]['place_categories']['title'];
                    } else {
                        $trip['cities'] = $trip['cities'] . '' . $trip['place_trip_categories_cities'][$i]['place_categories']['title'] . '-';
                    }
                }
            }
        }

        return response()->json($allTrip);
    }
}

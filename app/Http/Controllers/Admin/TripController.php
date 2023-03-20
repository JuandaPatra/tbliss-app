<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hashtag;
use App\Models\Place_categories;
use App\Models\Trip_categories;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        /// return $id;
        $trip = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,slug,title', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title,slug', 'hashtag_place_trip:id,hashtag_id,trip_categories_id', 'hashtag_place_trip.hashtag:id,title,slug'])->whereId($id)->get(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'link_g_drive', 'date_from', 'date_to', 'status']);
        // return $trip[0];

        $negara = Place_categories::with(['descendants'])->onlyParent()->get(['id', 'title']);
        $hashtags = Hashtag::all(['id', 'title']);
        return view('admin.products.edit', [
            'statuses' => $this->statuses(),
            'destinations' => $negara,
            'hashtags' => $hashtags,
            'trip'     => $trip[0]
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

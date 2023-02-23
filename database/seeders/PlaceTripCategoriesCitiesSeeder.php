<?php

namespace Database\Seeders;

use App\Models\place_trip_categories_cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTripCategoriesCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        place_trip_categories_cities::create([
            'trip_categories_id'        =>  1,
            'place_categories_id'       =>  7
        ]);
        place_trip_categories_cities::create([
            'trip_categories_id'        =>  1,
            'place_categories_id'       =>  8
        ]);
    }
}

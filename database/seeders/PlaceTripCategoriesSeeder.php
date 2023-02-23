<?php

namespace Database\Seeders;

use App\Models\Place_trip_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTripCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place_trip_categories::create([
            'trip_categories_id'        =>  1,
            'place_categories_id'       =>  4,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Trip_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip_categories::create([
            'title'         => 'Korean Autumn Trip',
            'slug'          => 'korean-autumn-trip',
            'thumbnail'     =>  'http://127.0.0.1:8000/storage/photos/1/Slider/korea-bg-1.jpg',
            'description'   =>  '<p>Open Trip 6H5M</p>',
            'itinerary'     =>  '<p>Seoul 1<br />Seoul 2<br />Seoul 3<br />Seoul 4<br />Seoul 5</p>',
            'price'         =>  1500000,
            'day'           =>  6,
            'night'         =>  5,
            'seat'          =>  40,
            'link_g_drive'  =>  'www.google.com',
            'date_from'     =>  '2023-02-25',
            'date_to'       =>  '2023-03-01',
            'status'        => 'publish'

        ]);
    }
}

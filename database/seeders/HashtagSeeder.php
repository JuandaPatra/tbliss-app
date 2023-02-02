<?php

namespace Database\Seeders;

use App\Models\Hashtag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hashtag::create([
            'title' => '#EnjoyK-Pop',
            'slug'  => 'enjoyk-pop',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#FromTheSea,FromTheRiver',
            'slug'  => 'fromtheseafromtheriver',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#FlavorsofTheCity',
            'slug'  => 'flavorsofthecity',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#ConvenientTravelServices',
            'slug'  => 'convenienttravelservices',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#History/TraditionalTour',
            'slug'  => 'historytraditionaltour',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#OnlyinKorea',
            'slug'  => 'onlyinkorea',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#HealinginNature',
            'slug'  => 'healinginnature',
            'status'=> 'publish'
        ]);
        Hashtag::create([
            'title' => '#Foodtrip',
            'slug'  => 'foodtrip',
            'status'=> 'publish'
        ]);
        
    }
}

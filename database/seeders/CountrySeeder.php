<?php

namespace Database\Seeders;

use App\Models\Place_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place_categories::create([
            'title'     => 'Korea',
            'slug'      => 'korea',
            'parent_id' => 1,
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Jepang',
            'slug'      => 'jepang',
            'parent_id' => 1,
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Thailand',
            'slug'      => 'thailand',
            'parent_id' => 1,
            'status'    => 'publish'
        ]);
    }
}

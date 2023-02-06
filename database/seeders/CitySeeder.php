<?php

namespace Database\Seeders;

use App\Models\Place_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place_categories::create([
            'title'     => 'Seoul',
            'slug'      => 'seoul',
            'parent_id' => '4',
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Incheon',
            'slug'      => 'incheon',
            'parent_id' => '4',
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Pohang',
            'slug'      => 'pohang',
            'parent_id' => '4',
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Jeounju',
            'slug'      => 'jeounju',
            'parent_id' => '4',
            'status'    => 'publish'
        ]);
    }
}

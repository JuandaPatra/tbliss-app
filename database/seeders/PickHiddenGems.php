<?php

namespace Database\Seeders;

use App\Models\PickHiddenGem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PickHiddenGems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PickHiddenGem::create([
            'place_categories_id'                       => 7,
            'place_categories_categories_cities_id'     => 4,
            'hidden_gem_id'                             => 2
        ]);
    }
}

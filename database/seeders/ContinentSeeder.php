<?php

namespace Database\Seeders;

use App\Models\Place_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place_categories::create([
            'title'     => 'Asia',
            'slug'      => 'asia',
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Eropa',
            'slug'      => 'eropa',
            'status'    => 'publish'
        ]);
        Place_categories::create([
            'title'     => 'Afrika',
            'slug'      => 'afrika',
            'status'    => 'publish'
        ]);
    }
}

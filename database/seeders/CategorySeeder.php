<?php

namespace Database\Seeders;

use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'title'         => 'slider',
            'slug'          => 'slider',
            'description'   => 'deskripsi slider',
            'status'        => 'publish',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Categories::create([
            'title'         => 'Sosmed',
            'slug'          => 'sosmed',
            'description'   => 'deskripsi sosmed',
            'status'        => 'publish',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Categories::create([
            'title'         => 'hashtag',
            'slug'          => 'hashtag',
            'description'   => 'deskripsi hashtag',
            'status'        => 'publish',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

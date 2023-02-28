<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ContinentSeeder::class);
        // $this->call(CountrySeeder::class);
        // $this->call(CitySeeder::class);
        $this->call(HashtagSeeder::class);
        // $this->call(HiddenGemSeeder::class);
        // $this->call(PlaceTripCategoriesSeeder::class);
        // $this->call(PlaceTripCategoriesCitiesSeeder::class);
        // $this->call(TripCategoriesSeeder::class);
        // $this->call(PickHiddenGems::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

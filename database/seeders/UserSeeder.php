<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'superadmin',
            'email' => 'super@admin.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('user');
    }
}

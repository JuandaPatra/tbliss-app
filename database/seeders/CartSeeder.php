<?php

namespace Database\Seeders;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'user_id'               =>4,
            'trip_categories_id'    =>1,
            'qty'                   =>1,
            'price'                 =>1500000,
            'price_dp'              =>2250000,
            'total'                 =>2250000,
            'tanggal_pembayaran'    =>Carbon::now(),
            'foto_diunggah'         =>'tbliss.com/storage/photos/1/trip/trip-0.jpg',
            'tanggal_foto_diunggah' =>Carbon::now(),
            'tanggal_pembayaran_acc'=>Carbon::now(),
            'status'                => 'belum lunas',
        ]);
    }
}

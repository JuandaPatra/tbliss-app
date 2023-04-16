<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'trip_categories_id',
        'qty',
        'price',
        'price_dp',
        'total',
        'tanggal_pembayaran',
        'status',
        'visa',
        'total_tipping'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Trip()
    {
        return $this->belongsTo(Trip_categories::class, 'trip_categories_id', 'id');
    }
}

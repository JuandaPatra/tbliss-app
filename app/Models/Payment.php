<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'invoice_id',
        'user_id',
        'trip_categories_id',
        'qty',
        'price',
        'price_dp',
        'total',
        'tanggal_pembayaran',
        'status',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip_categories::class, 'trip_categories_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}

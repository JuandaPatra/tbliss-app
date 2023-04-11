<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'installment_id',
        'payment_id',
        'amount',
        'qty',
        'total',
        'due_date',
        'payment_acc_date',
        'status',
        'foto_diunggah',
        'foto_diunggah_acc',
        'user_id',
        'trip_categories_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip_categories::class, 'trip_categories_id', 'id');
    }

    
}

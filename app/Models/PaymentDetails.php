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
        'due_date',
        'payment_acc_date',
        'status',
        'foto_diunggah',
        'foto_diunggah_acc',
        'user_id',
        'trip_categories_id'
    ];

    
}

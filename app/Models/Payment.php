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
        'visa',
        'total_tipping',
        'grand_total',
        'due_date',
        'opsi_pembayaran',
        'url_unpaid_invoice',
        'url_paid_invoice',
        'due_date_satu',
        'due_date_dua',
        'email_reminder_date'
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

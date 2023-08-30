<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_categories extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug','description','itinerary','price','day','night','seat','thumbnail','date_from', 'date_to','link_g_drive','status', 'dp_price', 'installment1', 'installment2', 'visa','tipping','total_tipping','banner', 'trip_star', 'trip_review'];

    public function trip_include()
    {
        return $this->hasMany(Trip_includes::class,'trip_cat_id','id');
    }

    public function trip_exclude()
    {
        return $this->hasMany(Trip_exclude::class,'trip_cat_id','id');
    }
    
    public function place_trip_categories_cities()
    {
        return $this->hasMany(place_trip_categories_cities::class);
    }

    public function place_trip_categories()
    {
        return $this->hasMany(Place_trip_categories::class);
    }

    public function hashtag_place_trip()
    {
        return $this->hasMany(Hashtag_place_trip::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'trip_categories_id', 'id');
    }

    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetails::class, 'trip_categories_id', 'id');
    }

    public function testimoniUser()
    {
        return $this->hasMany(ReviewTrip::class, 'categories_trip_id', 'id');
    }
}

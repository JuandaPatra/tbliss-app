<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickHiddenGem extends Model
{
    use HasFactory;
    protected $fillable = ['place_trip_categories_cities_id','place_categories_categories_cities_id', 'place_categories_id', 'hidden_gem_id'];

    public function place_categories()
    {
        return $this->belongsTo(Place_categories::class);
    }

    public function place_trip_categories_cities()
    {
        return $this->belongsTo(place_trip_categories_cities::class);
    }

    // public function hidden_gems()
    // {
    //     return $this->hasOne(Hidden_gem::class,'id');
    // }

    public function hidden_gems()
    {
        return $this->hasOne(Hidden_gem::class,'id','hidden_gem_id');
    }

}

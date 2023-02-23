<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place_trip_categories_cities extends Model
{
    use HasFactory;

    protected $fillable = ['trip_categories_id', 'place_categories_id'];

    public function place_categories()
    {
        return $this->belongsTo(Place_categories::class);
    }

    public function pick_hidden_gem()
    {
        return $this->hasMany(PickHiddenGem::class,'place_categories_categories_cities_id', 'id');
    }

    
}

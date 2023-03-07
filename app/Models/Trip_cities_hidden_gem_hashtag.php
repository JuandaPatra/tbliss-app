<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_cities_hidden_gem_hashtag extends Model
{
    use HasFactory;

    protected $fillable = ['trip_categories_id', 'place_categories_cities_id', 'hidden_gem_id', 'hashtag_id'];

}

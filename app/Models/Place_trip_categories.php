<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place_trip_categories extends Model
{
    use HasFactory;

    protected $fillable = ['trip_categories_id', 'place_categories_id'];

    public function place_categories()
    {
        return $this->belongsTo(Place_categories::class);
    }
}

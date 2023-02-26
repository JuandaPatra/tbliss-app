<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag_place_trip extends Model
{
    use HasFactory;

    protected $fillable = ['trip_categories_id', 'hashtag_id'];

    public function hashtag()
    {
        return $this->belongsTo(Hashtag::class);
    }

    public function place_trip()
    {
        return $this->belongsTo(Trip_categories::class);
    }
}

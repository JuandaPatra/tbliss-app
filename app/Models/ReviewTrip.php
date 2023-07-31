<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewTrip extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'categories_trip_id','description', 'from'];

    public function trip()
    {
        return $this->belongsTo(Trip_categories::class, 'id', 'categories_trip_id');
    }
}

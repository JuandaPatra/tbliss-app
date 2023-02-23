<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_includes extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug','icon_image','trip_cat_id'];

    public function trip_categories()
    {
        return $this->belongsTo(Trip_categories::class);
    }
}

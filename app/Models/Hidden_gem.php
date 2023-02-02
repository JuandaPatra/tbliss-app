<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidden_gem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description1', 'hashtag_id', 'image_id', 'places_id', 'status'];
}

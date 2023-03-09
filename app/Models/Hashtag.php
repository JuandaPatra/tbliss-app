<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'status'];

    public function hashtag_place_trip()
    {
        return $this->hasMany(Hashtag_place_trip::class);
    }

    public function hidden_gem_hashtag()
    {
        return $this->hasMany(hidden_gem_hashtag::class);
    }
    
}

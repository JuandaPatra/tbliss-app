<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidden_gem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description1', 'hashtag_id', 'image_desktop', 'image_mobile', 'image_id', 'places_id', 'status'];

    public function place()
    {
        return $this->belongsTo(Place_categories::class, 'places_id');
    }

    public function hidden_hashtag()
    {
        return $this->hasMany(hidden_gem_hashtag::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'description_2',
        'description_3',
        'description_4',
        'images',
        'video_url',
        'status'
    ];

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}

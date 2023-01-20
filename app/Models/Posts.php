<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class Posts extends Model
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
    ];


    public function categories()
    {
        // return $this->belongsToMany(Category::class)->withTimestamps();
        return $this->belongsTo(Category::class);
    }
}

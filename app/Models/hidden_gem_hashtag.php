<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hidden_gem_hashtag extends Model
{
    use HasFactory;

    protected $fillable = ['hidden_gem_id', 'hashtag_id'];
}

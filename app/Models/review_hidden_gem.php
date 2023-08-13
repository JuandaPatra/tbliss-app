<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review_hidden_gem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hidden_gem_id',
        'description',
        'from'
    ];
}

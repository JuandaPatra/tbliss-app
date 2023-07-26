<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiddenGemHomepage extends Model
{
    use HasFactory;

    protected $fillable = ['hidden_gem_id', 'country_id'];

    public function hidden_gem()
    {
        return $this->belongsTo(Hidden_gem::class);
    }
}

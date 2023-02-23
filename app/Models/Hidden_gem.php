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

    // public function pick_hidden_gem()
    // {
    //     // return $this->hasOne(PickHiddenGem::class, 'pick_hidden_gems_id');
    //     // return $this->belongsTo(PickHiddenGem::class);
    //     return $this->belongsTo(PickHiddenGem::class,);
    //     // return $this->belongsTo(PickHiddenGem::class);
    //     // return $this->belongsTo(Hidden_gem::class);
    // }

    // public function pick_hidden_gem()
    // {
    //     return $this->belongsTo(PickHiddenGem::class,'hidden_gems_id','id');
    // }

    public function pick_hidden_gem()
    {
        return $this->belongsTo(PickHiddenGem::class);
    }

    // public function pick_hidden_gem()
    // {
    //     return $this->belongsTo(PickHiddenGem::class,'hidden_gem_id');
    // }

    // public function pick_hidden_gem()
    // {
    //     return $this->hasOne(PickHiddenGem::class,'hidden_gems_id','id');
    // }
}

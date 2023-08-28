<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place_categories extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id', 'status','images', 'images2'];

    public function scopeOnlyParent($query)
    {
        return $query->whereNull('parent_id');
    }
    public function parent(){
        return $this->belongsto(self::class);
    } 
    public function children()
    {
        return $this->hasMany(self::class,'parent_id');
    }
    public function descendants(){
        return $this->children()->with('descendants');
    }

    public function hidden_gem()
    {
        return $this->hasMany(Hidden_gem::class, 'places_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(place_trip_categories_cities::class);
    }

    public function region()
    {
        return $this->hasMany(Place_trip_categories::class);
    }

   

}

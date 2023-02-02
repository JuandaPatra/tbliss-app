<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place_categories extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id', 'status'];

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
}

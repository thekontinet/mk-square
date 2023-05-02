<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function businesses(){
        return $this->belongsToMany(Business::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

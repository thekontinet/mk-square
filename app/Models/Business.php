<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

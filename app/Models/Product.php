<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'stock', 'discount', 'price'];
    function reviews(){
        return $this->hasMany(Review::class);
    }
}

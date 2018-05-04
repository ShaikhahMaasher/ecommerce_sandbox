<?php

namespace App;

class Product extends Model
{
    // Fillable 
    // protected $fillable = ['title', 'description'];

    // Guarded
    // protected $guarded = [];

    public function getStatusAttribute($value)
    {
        return ucwords($value);
    }
}

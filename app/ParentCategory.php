<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    protected $fillable = ['name', 'desc'];
    
    public function categories(){
        return $this->hasMany(Category::class);
    }
}

<?php

namespace App;


class ParentCategory extends Model
{
     
    public function categories(){
        return $this->hasMany(Category::class);
    }
}

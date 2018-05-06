<?php

namespace App;


class Cate extends Model
{
    
    public function cateChild(){
        return $this->hasMany(Cate::class,'cate_id');
    }
}

<?php

namespace App;

class Image extends Model
{
   
    public function imageable() {
        return $this->morphTo();
    }

}

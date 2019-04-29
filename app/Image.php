<?php

namespace App;
use Storage;

class Image extends Model
{
   
    public function imageable() {
        return $this->morphTo();
    }

    public function getImage($type, $path) {           
        return Storage::disk('local')->url($type. '\\' . $path);
    }
}

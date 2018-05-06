<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
        //To call sluggable method
        use Sluggable;
        //To call SoftDeletes method
        use SoftDeletes;
    // Fillable 
    // protected $fillable = ['title', 'description'];

    // Guarded
    // protected $guarded = [];
        /**
     * Return the sluggable configuration array for this model.
     *
     */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' =>! is_null($this->slug)? 'slug':'title',
                  'onUpdate'=> true,
                  'unique' => true,
             ]
         ];
     }
}

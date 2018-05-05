<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use \Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model

{  
    //To call sluggable method
    use Sluggable;
    use SoftDeletes;
    /**
     * Return the sluggable configuration array for this model.
     *
     */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' =>! is_null($this->slug)? 'slug':'name',
                  'onUpdate'=> true,
                  'unique' => true,
             ]
         ];
     }
     //Add relationship with parent category
    public function parentcategory(){
        return $this->belongsTo(ParentCategory::class,'parent_category_id');
       }


}

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
    
    /**
     * The Categories that has many categories.
     */
    public function childs() {
        return $this->hasMany(Category::class);
    }
    public function parent(){
        return $this->belongsTo(Category::class,'category_id');
    }

    /**
     * The products that belong to the category.
     */
    public function products() {
        return $this->belongsToMany(Product::class);
    }

}

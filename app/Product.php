<?php

namespace App;

class Product extends Model
{
    // Fillable 
    // protected $fillable = ['title', 'description'];

    // Guarded
    // protected $guarded = [];

    /**
     * Get the status with first letter uppercase using accessor.
     *
     * @param  string  $value
     * @return string
     */
    public function getStatusAttribute($value)
    {
        return ucwords($value);
    }

    /**
     * The categories that belong to the product.
     */
    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The categories that belong to the product.
     */
    public function parentcategories() {
        return $this->belongsToMany(ParentCategory::class);
    }

    public function checkUserCategory($user_categ, $all_categ) {
        foreach ($user_categ as $user) {
            if($user->id == $all_categ->id) 
                return "checked";                            
        }
        return '';
    }
}

<?php

namespace App;


class ParentCategory extends Model
{
    public function childs() {
        return $this->hasMany(Category::class);
    }

    /**
     * The products that belong to the category.
     */
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}

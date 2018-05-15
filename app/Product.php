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

    public function checkUserCategory($user_categs, $all_categ) {
        foreach ($user_categs as $user_categ) {
            if($user_categ->id == $all_categ->id) 
                return "checked";                            
        }
        return '';
    }

    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model

{
    protected $fillable = ['name', 'desc','parent_category_id','slug'];
  
    
    public function parentcategory(){
        return $this->belongsTo(ParentCategory::class,'parent_category_id');
       }

}

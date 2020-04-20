<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $guarded = [];

    public function category(){

    	return $this->belongsTo(Category::class);
    }
    // one subcategory may have many products
    //many product may have many subcategories
    public function products(){

    	return $this->hasMany(Product::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    //
    // use SoftDeletes;
    protected $guarded = [];

    public function products(){

    	return $this->hasMany(Product::class);
    }

    public function subcategories(){

    	return $this->hasMany(Subcategory::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}

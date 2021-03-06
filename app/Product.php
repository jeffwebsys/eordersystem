<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    //

    use SoftDeletes;

    protected $guarded = [];

    public function category(){

    	return $this->belongsTo(Category::class);
    }
    public function user(){

    	return $this->belongsTo(User::class);
    }
    public function subcategory(){
    	return $this->belongsTo(Subcategory::class);
    }
}

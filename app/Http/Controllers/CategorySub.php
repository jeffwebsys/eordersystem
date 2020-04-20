<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;
use DB;

class CategorySub extends Controller
{
    //

    public function show(Category $category,Subcategory $subcategory,Product $product){

     $subs = Product::where('subcategory_id',$subcategory->id)->get();
   
   	

    return view('categorysub.show',compact('category','subcategory','product','subs'));
}
}

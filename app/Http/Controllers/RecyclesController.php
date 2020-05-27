<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class RecyclesController extends Controller
{
    //
   

    public function index(){


    	$products = Product::onlyTrashed()->get();

    	return view('recycles.index',compact('products'));
    }


    public function restore(Request $request){

    

    	$test = Product::withTrashed()->where('id', $request['id'])->restore();
  

    	return redirect('/trashed');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class DashboardController extends Controller
{
    //

    public function index(Product $products, Category $category){



    	return view('index',compact('products','category'));
    }
}

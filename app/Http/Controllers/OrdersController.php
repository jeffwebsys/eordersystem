<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Product;


class OrdersController extends Controller
{
//
public function index(){

$product = Product::all();

return view('orders.index',compact('product'));
}

public function store(){




// $data = Http::get('https://bible-api.com/'.$data2)->json();

// return redirect('/order');
}

}

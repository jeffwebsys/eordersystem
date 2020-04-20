<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7\Response;


class OrdersController extends Controller
{
//
public function index(){


// $data2 = 'John 1:1';
// $data = Http::get('https://bible-api.com/'.$data2)->json();

// return view('orders.index',['data' => $data]);

$data = Http::get('https://bible-api.com/')->json();

return view('orders.index',['data' => $data]);
}

public function store(){




// $data = Http::get('https://bible-api.com/'.$data2)->json();

// return redirect('/order');
}

}

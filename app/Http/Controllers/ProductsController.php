<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Subcategory;
use App\Category;

		class ProductsController extends Controller
		{
		//
		public function index(){

		// $products = Product::where('status',2)->get();
		$products = Product::all();

		return view('product',compact('products'));
		}

		public function create(Product $product){

		$subcategory = Subcategory::all();

		return view('products.create',compact('subcategory','product'));
		}
		public function edit(Product $product){

		$subcategory = Subcategory::all();

		return view('products.edit',compact('product','subcategory'));
		}

		public function store(Category $category){
		$data = request()->validate([
		'subcategory_id' => 'required',
		'name' => 'required',
		'price' => 'required',
		'status' => 'required',
		'description' => 'required',
		'quantity' => 'required|max:9',

		]);


		$products = auth()->user()->products()->create($data);
		return redirect('/product');
		}

		public function update(Product $product){
		$data = request()->validate([
		'subcategory_id' => 'required',
		'name' => 'required',
		'price' => 'required',
		'status' => 'required',
		'description' => 'required',
		'quantity' => 'required|max:9',

		]);


		$product = auth()->user()->products()->where('id',$product->id)->update($data);
		return back();

		}
		public function destroy(Product $product){

		$product = auth()->user()->products()->where('id',$product->id)->delete();

		return redirect('/product');
		}

		}

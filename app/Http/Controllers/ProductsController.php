<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Subcategory;
use App\Category;
use Intervention\Image\Facades\Image;

		class ProductsController extends Controller
		{


		public function __construct(){

		$this->middleware('auth');
		}
		//
		public function index(){

		// $products = Product::where('status',2)->get();
		$products = Product::orderBy('created_at','DESC')->get();

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

		public function store(){

		$data = $this->validatedForm();

		$imagePath = request('image')->store('uploads','public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(500,500);
    	$image->save();
    	auth()->user()->products()->create([

    	'subcategory_id' => $data['subcategory_id'],
		'name' => $data['name'],
		'price' => $data['price'],
		'status' => $data['status'],
		'description' => $data['description'],
		'quantity' => $data['quantity'],
    	'image' => $imagePath,

    	]);
    	
		

       
		
		// $imageName = time().'.'.$request->image->extension();  
   
  //       $request->image->move(public_path('uploads'), $imageName);
   

		// $products = auth()->user()->products()->create($data);
		// dd($products);
		
		return redirect('/product');
		}

		public function update(Product $product){
		
		$data = $this->validatedForm();

		if(request('image')){
    	$imagePath = request('image')->store('uploads','public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(500,500);
    	$image->save();
    	
    	$imageArray = ['image' => $imagePath];

    	}

		$product = auth()->user()->products()->where('id',$product->id)->update(array_merge(
        $data,
        $imageArray ?? []

        ));

		return back();

		}
		public function destroy(Product $product){

		$product = auth()->user()->products()->where('id',$product->id)->delete();

		return redirect('/product');
		}


		protected function validatedForm(){


		return request()->validate([
		'subcategory_id' => 'required',
		'name' => 'required',
		'price' => 'required',
		'status' => 'required',
		'description' => 'required',
		'image' => 'required',
		'quantity' => 'required|max:9',

		]);

		}



		}

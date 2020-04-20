<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;

		class SubcategoriesController extends Controller
		{
		//
		public function index(){

		$subcategories = Subcategory::all();	
		return view('subcategories.index',compact('subcategories'));
		}
		public function create(){

		$category = Category::all();
		return view('subcategories.create',compact('category'));
		}

		public function edit(Subcategory $subcategory){

			$categories = Category::all();
			return view('subcategories.edit',compact('subcategory','categories'));
		}
		public function update(Subcategory $subcategory){

		$data = request()->validate([
		'category_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'status' => 'required',
		]);

		auth()->user()->subcategories()->where('id',$subcategory->id)->update($data);
		
		
		return redirect('/subcategory');
		}

		public function store(Category $category,Subcategory $subcategory){

		$data = request()->validate([
		'category_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'status' => 'required',
		]);


		auth()->user()->subcategories()->create($data);
		return redirect('/subcategory');
		}

		public function destroy(Subcategory $subcategory){

		auth()->user()->subcategories()->where('id',$subcategory->id)->delete();
		
		return redirect('/subcategory');
		}
		}

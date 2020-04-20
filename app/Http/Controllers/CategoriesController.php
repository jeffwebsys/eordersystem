<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Subcategory;

    class CategoriesController extends Controller
    {
    //
    public function index(Subcategory $subcategory,Category $category){
    $categories = Category::all();
    // $subcategory = Subcategory::all();
    

    return view('categories.index',compact('categories','subcategory'));
    }
    public function create(){

    $category = Category::all();
    return view('categories.create',compact('category'));
    }

    public function store(){

    $data = request()->validate([
    'name' => 'required',
    'description' => 'required',
    'status' => 'required',
    ]);

    $categories = auth()->user()->categories()->create($data);
    return redirect('/category');
    }
    public function edit(Category $category){

    return view('categories.edit',compact('category'));

    }
    public function update(Category $category){
    $data = request()->validate([
    'name' => 'required',
    'description' => 'required',
    'status' => 'required',
    ]);

    $category = auth()->user()->categories()->where('id',$category->id)->update($data);
    return back();
    }

    public function destroy(Category $category,Product $product){

    $cat = auth()->user()->categories()->where('id',$category->id)->delete();
   
    return redirect('/category/');
    }
    }

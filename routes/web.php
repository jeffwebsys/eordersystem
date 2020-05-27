<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', function () { return view('welcome'); });

Route::get('/index', 'DashboardController@index');

#products
Route::get('/product', 'ProductsController@index');
Route::get('/product/create', 'ProductsController@create');
Route::post('/product', 'ProductsController@store');
Route::get('/product/edit/{product}', 'ProductsController@edit');
Route::patch('/product/{product}', 'ProductsController@update');
Route::delete('/product/{product}', 'ProductsController@destroy');

#categories
Route::get('/category', 'CategoriesController@index');
Route::get('/category/create', 'CategoriesController@create');
Route::post('/category', 'CategoriesController@store');
Route::get('/category/edit/{category}', 'CategoriesController@edit');
Route::patch('/category/{category}', 'CategoriesController@update');
Route::delete('/category/{category}', 'CategoriesController@destroy');

#subcats
Route::get('/subcategory', 'SubcategoriesController@index');
Route::get('/subcategory/create', 'SubcategoriesController@create');
Route::post('/subcategory', 'SubcategoriesController@store');
Route::get('/subcategory/edit/{subcategory}', 'SubcategoriesController@edit');
Route::patch('/subcategory/{subcategory}', 'SubcategoriesController@update');
Route::delete('/subcategory/{subcategory}', 'SubcategoriesController@destroy');

#catsubs
Route::get('/category/subcategory/{category}/', 'CategorySub@show')->name('categorysub.show');

#Profile
Route::get('/profile/', 'ProfilesController@index')->name('profile.index');

##Recycles
Route::get('/trashed/', 'RecyclesController@index');
Route::post('/trashed/{id}', 'RecyclesController@restore');




#orddrs
Route::get('/order/', 'OrdersController@index');
Route::post('/order/', 'OrdersController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

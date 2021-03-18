<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
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

Route::get('/', function () {


    //dd($response);

    return view('auth.login');
});

Route::resource('brand','App\Http\Controllers\BrandController');
Route::post('brand/store', 'App\Http\Controllers\BrandController@store');
Route::get('brand/edit/{id}', 'App\Http\Controllers\BrandController@edit');
Route::get('brand/confirmdestroy/{id}', 'App\Http\Controllers\BrandController@confirmdestroy');
Route::get('brand/destroy/{id}', 'App\Http\Controllers\BrandController@destroy');
Route::post('brand/update/{id}', 'App\Http\Controllers\BrandController@update');
Route::get('brand/update/{id}', 'App\Http\Controllers\BrandController@update');

Route::resource('size','App\Http\Controllers\SizeController');
Route::post('size/store', 'App\Http\Controllers\SizeController@store');
Route::get('size/edit/{id}', 'App\Http\Controllers\SizeController@edit');
Route::get('size/confirmdestroy/{id}', 'App\Http\Controllers\SizeController@confirmdestroy');
Route::get('size/destroy/{id}', 'App\Http\Controllers\SizeController@destroy');
Route::post('size/update/{id}', 'App\Http\Controllers\SizeController@update');
Route::get('size/update/{id}', 'App\Http\Controllers\SizeController@update');

Route::resource('product','App\Http\Controllers\ProductController');
Route::post('product/store', 'App\Http\Controllers\ProductController@store');
Route::get('product/edit/{id}', 'App\Http\Controllers\ProductController@edit');
Route::get('product/confirmdestroy/{id}', 'App\Http\Controllers\ProductController@confirmdestroy');
Route::get('product/destroy/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::post('product/update/{id}', 'App\Http\Controllers\ProductController@update');
Route::get('product/update/{id}', 'App\Http\Controllers\ProductController@update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


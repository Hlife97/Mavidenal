<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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

// Route::get('/', 'App\Http\Controllers\Front\Homepage@index')->name('homepage');

Route::get('/', function () {
    return view('front.homepage');
});

//Route::resource('products', ProductsController::class);
//Route::get('products', 'ProductsController@index');
//Route::get('products', ["uses"=>"ProductsController@index"]);

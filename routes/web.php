<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Product;
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
/*
Route::get('/', function () {

    $product=Product::all();

    return view('hom');
});*/
Route::get('/','App\Http\Controllers\Controller@index')->name("article");

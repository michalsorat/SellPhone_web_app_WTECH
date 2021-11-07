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

Route::get('/', function () {
    return view('homePage');
});
Route::get('/iphone', function () {
    return view('iphonePage');
});
Route::get('/product-detail', function () {
    return view('productDetailPage');
});
Route::get('/homepage', function () {
    return view('homePage');
});
Route::get('/register', function () {
    return view('registerPage');
});


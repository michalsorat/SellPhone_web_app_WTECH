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
Route::get('/register', function () {
    return view('registerPage');
});
Route::get('/summarization', function () {
    return view('shoppingCartStep1');
});
Route::get('/shipping-payment', function () {
    return view('shoppingCartStep2');
});
Route::get('/shipping-address', function () {
    return view('CartStep3');
});
Route::get('/order-confirmation', function () {
    return view('orderConfirmation');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

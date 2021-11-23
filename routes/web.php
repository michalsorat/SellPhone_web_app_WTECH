<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [ProductController::class, 'home']) -> name('homepage');

Route::get('/apple', [ProductController::class, 'index']) -> name('apple');
Route::get('/samsung', [ProductController::class, 'index']) -> name('samsung');
Route::get('/huawei', [ProductController::class, 'index']) -> name('huawei');
Route::get('/xiaomi', [ProductController::class, 'index']) -> name('xiaomi');
Route::get('/oneplus', [ProductController::class, 'index']) -> name('oneplus');
Route::get('/lg', [ProductController::class, 'index']) -> name('lg');
Route::get('/accessories', [ProductController::class, 'index']) -> name('accessories');

Route::resource('product', ProductController::class);
Route::get('/autocomplete', [ProductController::class, 'autocomplete'])->name('autocomplete');
Route::get('/product-search', [ProductController::class, 'showProductByName'])->name('searchProduct');

Route::get('/add-item-to-cart/{id}', [ProductController::class, 'addItemToCart'])->name('addItemToCart');
Route::get('/add-one-item-to-cart/{id}', [ProductController::class, 'addOneItemToCart'])->name('addOneItemToCart');
Route::get('/remove-item-from-cart/{id}', [ProductController::class, 'removeItemFromCart'])->name('removeItemFromCart');
Route::get('/remove-one-item-from-cart/{id}', [ProductController::class, 'removeOneItemToCart'])->name('removeOneItemToCart');
Route::get('/get-shopping-cart-1', [ProductController::class, 'getShoppingCart1'])->name('getShoppingCart1');

Route::get('/get-shopping-cart-1/get-shopping-cart-2', [ProductController::class, 'getShoppingCart2'])->name('getShoppingCart2');

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

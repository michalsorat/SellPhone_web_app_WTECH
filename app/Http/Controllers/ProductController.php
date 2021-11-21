<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function index()
    {
        $name = Route::currentRouteName();

        $products = Product::with('productImages')->whereHas('productImages', function ($query) {
                                                                $query->where('main_img', 1);})
                                                         ->where('category', $name)->get();
        //TODO prist na sposob ako vyfiltrovat obrazky ktore maju atribut main_img na true resp. 1 a zaroven filtrovat tú kategoriu

//        dd($products->toArray());

        return view('productsPage')
            ->with('products', $products);
    }

    public function show($id)
    {
        $product = Product::with('productImages', 'specifications', 'parameters')->where('id', $id)->get();

//        dd($product->toArray());

        return view('productDetailPage')
            ->with('product', $product);
    }
}

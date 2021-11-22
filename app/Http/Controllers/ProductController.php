<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function home()
    {
        $top_products = Product::where('top_product', 1)->get();
        $best_prices = Product::where('best_price', 1)->get();
        $discounts = Product::where('discount', 1)->get();

        return view('homePage')
            ->with('top_products', $top_products)
            ->with('best_prices', $best_prices)
            ->with('discounts', $discounts);
    }

    public function index()
    {
        $name = Route::currentRouteName();

        $image = Product::find(1)->productImages()
                                 ->where('main_img', 1)
                                 ->first();

        $products = Product::where('category', $name)->paginate(16);

//        dd($products->toArray());

        return view('productsPage')
            ->with('products', $products)
            ->with('image', $image->image_src);
    }

    public function show($id)
    {
        $product = Product::with('productImages', 'specifications', 'parameters')->where('id', $id)->first();

//        dd($product->toArray());

        if ($product->available_amount > 0) {
            $availability = 'Skladom';
        }
        else {
            $availability = 'Na objednávku';
        }

        return view('productDetailPage')
            ->with('product', $product)
            ->with('availability', $availability);
    }
}

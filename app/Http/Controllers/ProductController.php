<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function home()
    {
        $top_products = Product::with('productImages')->where('top_product', 1)->get();
        $best_prices = Product::with('productImages')->where('best_price', 1)->get();
        $discounts = Product::with('productImages')->where('discount', 1)->get();

        return view('homePage')
            ->with('top_products', $top_products)
            ->with('best_prices', $best_prices)
            ->with('discounts', $discounts);
    }

    public function index()
    {

        $request = request();
        $products = Product::with('productImages')->where('category', $request->category)->paginate(16);

//        dd($products->toArray());

        return view('productsPage')
            ->with('products', $products);
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

    public function showProductByName(Request $request){
        $product = Product::with('productImages', 'specifications', 'parameters')->where('name', $request->search_input)->first();

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

    public function autocomplete(Request $request)
    {
        $data = Product::select("name")
            ->where("name", "LIKE", "%{$request->get('query')}%")
            ->get();
        $product_names = array();
        foreach ($data as $obj) {
            array_push($product_names, (json_decode($obj)->name));
        }
        return response()->json($product_names);

//        return Problem::select('address')
//            ->where('address', 'LIKE', "%{$request->get('query')}%")
//            ->pluck('address');
    }
}

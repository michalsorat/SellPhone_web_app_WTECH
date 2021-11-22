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

    public function index(Request $request)
    {
//        dd($request->toArray());

        $category = Route::currentRouteName();
        $products = Product::with('productImages')
            ->where('category', $category)
            ->where(function($query) use ($request) {
                if (!empty($request->minPrice)) {
                    $query->where('price', '>=', $request->minPrice);
                }
                if (!empty($request->maxPrice)) {
                    $query->where('price', '<=', $request->maxPrice);
                }
                if (!empty($request->inStock)) {
                    if (count($request->inStock) == 1) {
                        if ($request->inStock[0] == 'true') {
                            $query->where('available_amount', '>', 0);
                        }
                        else {
                            $query->where('available_amount', 0);
                        }
                    }
                }
            })
            ->whereHas('parameters', function ($query) use ($request) {
                if (!empty($request->screenSize)) {
                    foreach ($request->screenSize as $screenSize) {
                        $query->where('screen_size', 'LIKE', "$screenSize%");
                    }
                }
                if (!empty($request->ram)) {
                    $query->whereIn('ram', $request->ram);
                }
                if (!empty($request->internalStorage)) {
                    $query->whereIn('internal_storage', $request->internalStorage);
                }
            })
            ->when($request, function($query) use ($request) {
                if (!empty($request->orderBy)) {
                    if ($request->orderBy == 'new') {
                        $query->orderByDesc('created_at');
                    }
                    else if ($request->orderBy == 'priceAsc') {
                        $query->orderBy('price');
                    }
                    else if ($request->orderBy == 'priceDesc') {
                        $query->orderByDesc('price');
                    }
                }
                else {
                    $query->orderByDesc('created_at');
                }
            })
            ->paginate(16);

//        dd($products->toArray());

        return view('productsPage')
            ->with('products', $products)
            ->with('category', $category);
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

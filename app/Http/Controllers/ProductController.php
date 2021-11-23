<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
                    $query->where('screen_size', 'LIKE', "{$request->screenSize[0]}%");
                    foreach ($request->screenSize as $screenSize) {
                        $query->orWhere('screen_size', 'LIKE', "{$screenSize}%");
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
        $products = Product::with('productImages', 'specifications', 'parameters')
                            ->where('category', 'LIKE', "%{$request->search_input}%")
                            ->orWhere('name', 'LIKE', "%{$request->search_input}%")
                            ->orWhere('price', 'LIKE', "%{$request->search_input}%")
                            ->paginate(16);

//        $products = DB::select(DB::raw());
//        $products = Product::whereRaw('MATCH (name, category, short_description AGAINST (?)', array($request->search_input))->get();

        if ($product != null) {
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
        else if ($products != null) {
            return view('productsPage')
                ->with('products', $products)
                ->with('category', null);
        }
        else return redirect('/');
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

    public function addItemToCart(Request $request, $id)
    {
        $oldShoppingCart = null;
        if ($request->session()->has('shoppingCart')) {
            $oldShoppingCart = $request->session()->get('shoppingCart');
        }
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $product = Product::with('productImages', 'specifications', 'parameters')->find($id);

//        dd($product->toArray());

        $shoppingCart->add($product, $product->id);
//        dd($shoppingCart);
        $request->session()->put('shoppingCart', $shoppingCart);

        return redirect()->back();
    }

//    public function removeItemFromCart(Request $request, $id)
//    {
//        $shoppingCart = $request->session()->get('shoppingCart');
//        $shoppingCart[$id][]
//    }

    public function removeItemFromCart(Request $request, $id) {
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $shoppingCart->remove($id);
        $request->session()->put('shoppingCart', $shoppingCart);

        return redirect()->back();
    }

    public function addOneItemToCart(Request $request, $id) {
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $shoppingCart->addOne($id);
        $request->session()->put('shoppingCart', $shoppingCart);

        return redirect()->back();
    }

    public function removeOneItemToCart(Request $request, $id) {
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $shoppingCart->removeOne($id);
        $request->session()->put('shoppingCart', $shoppingCart);

        return redirect()->back();
    }

    public function getShoppingCart1(Request $request) {
        if (!$request->session()->has('shoppingCart')) {
            return view('shoppingCartStep1');
        }
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
//        dd($shoppingCart->items);
        return view('shoppingCartStep1')
            ->with('products', $shoppingCart->items)
            ->with('totalPrice', $shoppingCart->totalPrice);
    }

    public function getShoppingCart2(Request $request) {
        if (!$request->session()->has('shoppingCart')) {
            return view('shoppingCartStep2');
        }
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
//        dd($shoppingCart->items);
        return view('shoppingCartStep2')
            ->with('products', $shoppingCart->items)
            ->with('totalPrice', $shoppingCart->totalPrice);
    }

    public function getShoppingCart3(Request $request) {
        if (!$request->session()->has('shoppingCart')) {
            return view('shoppingCartStep3');
        }
        $oldShoppingCart = $request->session()->get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $user = Auth::user();
//        dd($shoppingCart->items);
        return view('shoppingCartStep3')
            ->with('products', $shoppingCart->items)
            ->with('totalPrice', $shoppingCart->totalPrice)
            ->with('user', $user);
    }

    public function getTransportType($type) {
//        dd($type);
        $price = 0;
        if ($type == 'delivery'){
            $price = 3.99;
        }
        else if ($type == 'cash-on-delivery') {
            $price = 2.99;
        }
        $oldShoppingCart = Session::get('shoppingCart');
        $shoppingCart = new ShoppingCart($oldShoppingCart);
        $shoppingCart->addPrice($price);
        Session::put('shoppingCart', $shoppingCart);

        return response()->json($price);
    }

    public function getOrderConfirmation(Request $request) {
        $order_id = substr(str_shuffle("123456789"), 0, 6);
        if ($request->session()->has('shoppingCart')) {
//            dd($request->request->all());
            Order::create($request->request->all());
            return view('orderConfirmation')
                ->with('totalPrice', $request->session()->get('shoppingCart')->totalPrice)
                ->with('orderId', $order_id);
        }
    }
}

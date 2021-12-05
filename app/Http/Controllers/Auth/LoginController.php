<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request, $user)
    {
        if (Session::has('shoppingCart')) {
            $cart = Session::get('shoppingCart');
            $order_arr = array_merge(Auth::user()->toArray(), ['status' => 'pending']);
            $order =  Order::create($order_arr);
            foreach ($cart->items as $item) {
                $order->products()->attach($item['item']['id'], ['product_quantity' => $item['quantity']]);
            }
        }

//        $cartProducts = Order::where('email', Auth::user()->email)->where('status', 'pending')->products()->get();
        $cartProducts = Order::firstWhere([['email', Auth::user()->email], ['status', 'pending']])->products()->get();

        dd($cartProducts);
        $shoppingCart = new ShoppingCart(null);
        foreach ($cartProducts as $cartProduct) {
            $product = Product::with('productImages', 'specifications', 'parameters')->find($cartProduct['product_id']);
            $shoppingCart->add($product, $product->id, $cartProduct['quantity']);
        }
        Session::put('shoppingCart', $shoppingCart);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

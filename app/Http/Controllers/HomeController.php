<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Services\CheckoutService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $pricing_rules = [
        'FR1' => ['get_one_free', null, null],
        'SR1' => ['bulk_discount', 3, 4.50]
    ];

    public function index()
    {
        $products = Product::all();
        $total_price = (new CheckoutService($this->pricing_rules))->getTotal();
        $cart = Cart::select('quantity')->count;
        return view('home', compact('products', 'total_price', 'cart'));
    }

    public function scan($product_code)
    {
        (new CheckoutService($this->pricing_rules))->scan($product_code);
        return redirect()->route('home');
    }
}

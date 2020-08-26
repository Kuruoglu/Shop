<?php

namespace App\Http\Controllers;

use App\Http\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Services\CartService;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->product_id);
        Cart::add($product, $request->qty);
        return view('shop._cart');
    }

    public function clear()
    {
        Cart::clear();
        return view('shop._cart');
    }

    public function delete(Request $request)
    {
        Cart::delete($request->id);
        return view('shop._cart');
    }

    public function plusOne(Request $request)
    {
        Cart::plus($request->id);
        return view('shop._cart');
    }
    public function minusOne(Request $request)
    {
        Cart::minus($request->id);
        return view('shop._cart');
    }
}

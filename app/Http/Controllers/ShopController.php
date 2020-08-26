<?php

namespace App\Http\Controllers;

use App\OrderItem;
use App\Review;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use App\Order;

class ShopController extends Controller
{
    public function category($slug) {
//Category::where('slug', $slug)->first();
        $category = Category::firstWhere('slug', $slug);
        $products = Product::with('reviews')->where('category_id', $category->id)->get();
//        dd($products->pluck('id')->toArray());
        return view( 'shop.index', compact('category', 'products'));

    }

    public function product($slug)
    {
//        $categories = Category::with('products')->firstWhere()->get();
//        $reviews = Review::with('user')->get();
        $product = Product::with('category')->where('slug', $slug)->first();
        $reviews = Review::with('user')->where('product_id', $product->id )->get();

//        $users = User::all()->where('id', $products[0]->reviews->user_id);


//print_r($products);
//        dd($product);
        return view('shop.product', compact('product', 'reviews'));
    }

    public function addComment(Request $request)
    {
//         dd($request);
//
        $comment = $request->comment;
        $userId = $request->user_id;
        if(is_numeric($request->user_id)) {
            $userId = $request->user_id;
        }else {
            $userId = null;
        }
        $productId = $request->product_id;
        $productName = $request->product_name;

        $review = new Review();
        $review->comment = $comment;
        $review->user_id = $userId;
        $review->product_id = $productId;
        $review->save();
        return back();
    }

    public function checkout()
    {

        return view('shop.checkout');
    }

    public function checkoutComplete(Request $request)
    {
        $order = Order::create($request->all());

        foreach (session('cart') as $item):
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->name = $item['name'];
        $orderItem->price = $item['price'];
        $orderItem->qty = $item['qty'];
        $orderItem->save();
        endforeach;
        return view('shop.checkout-complete');
//        dd($request->all());
    }
}

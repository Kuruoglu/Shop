<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index() {
//        $product = Product::find(1);
//        dd($product->category->name);
        $categories = Category::with('product')->get();
//        dd($categories);
        //where('recommended', '=', 1);
//        $category = Category::find(1);
//        dd($category->products->count());


        $products = Product::with('category')->where('recommended', 1)->whereNotNull('img')->get();

//        dd($products);
        return view('home.index', compact('categories', 'products'));
    }

    public function contacts()
    {

        return view('home.contacts');
    }

    public function getContacts(Request $request)
    {
        $name = $request->name;
        $category = new Category();
        $category->name = $name;
        $category->slug = \Str::slug($name, '-');
        $category->save();

//        $mess = $request->message;
        return redirect('/home');
//        return back(); //возвращяет на предыдущюю страницу(если мы не знаем с какой страницы прищла форма)
    }

}

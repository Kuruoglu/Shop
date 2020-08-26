<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('product')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
//        dd($request->all());
//        $validatedData = $request->validate([
//              'name' => 'required|unique:categories|max:64',
//            'slug' => 'unique:categories|max:128',
//            'img' => 'nullable|mimes:jpeg,png,jpg',
//        ]);

//        $name = $request->name;
//        $category = new Category();
//        $category->name = $name;
//        $category->slug = $request->slug ?? \Str::slug($name, '-');
//        $img = $request->file('file');
//        if ($img) {
//            $fName = $img->getClientOriginalName(); // название файла
//            $img->move(public_path('images/uploads'), $fName);
//            $category->img = '/images/uploads/' . $fName;
//        }
//        $category->save();

        $category = Category::create($request->all());
        return redirect('/admin/category')->with('success', 'Category ' . $category->name. ' been added!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::with('product')->where('id', $id)->first();
//        dd($category);
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
       return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {

//        $category = Category::where('id', $id)->first();
//        $image = $request->file('file')->store('uploads', 'public');
//        dd($image);
//       $category->name = $request->name;
//       $category->img = $request->img ? $request->img : $category->img;
//       $category->save();
//       return back();
//        dd($request->all());

//        $validatedData = $request->validate([
//            'name' => 'required|unique:categories,name,' . $id . '|max:64',
//            'slug' => 'unique:categories,slug,' . $id . '|max:128',
//            'img' => 'nullable|mimes:jpeg,png,jpg',
//        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect('/admin/category')->with('success', 'Category ' . $category->name . ' been updated!!!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Category::findOrFail($id)->delete();
        return back();
    }
}

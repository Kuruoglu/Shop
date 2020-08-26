<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/home', 'MainController@index')->name('home');
Route::get('/contacts', 'MainController@contacts');
Route::post('/contacts', 'MainController@getContacts');
Route::get('/checkout', 'ShopController@checkout');
Route::post('/checkout-complete', 'ShopController@checkoutComplete');
Route::get('/category/{slug}', 'ShopController@category');
Route::get('/product/{slug}', 'ShopController@product');
Route::post('/product/comment', 'ShopController@addComment');
Route::post('/cart/add', 'CartController@add');
Route::post('/cart/clear', 'CartController@clear');
Route::post('/cart/delete', 'CartController@delete');
Route::post('/cart/plus', 'CartController@plusOne');
Route::post('/cart/minus', 'CartController@minusOne');



// Routes group for admin panel
Route::group([
    'prefix' => '/admin',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin'],
], function() {
    Route::get('/', 'AdminController@index');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('user', 'UserController');
    Route::resource('review', 'ReviewController');
    Route::resource('post', 'PostController');

});


Route::get('/', 'MainController@index');
Auth::routes();


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
//Auth::logout();


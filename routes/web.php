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

Route::get('/', function () {
    return view('login_Register');
});

Route::get('login_register',function(){
    return view('login_Register');
});

Route::get('categoryfind/{id}','HomeController@categoryFind')->name('categoryfind');
Route::get('shop','HomeController@shop')->name('shop');
Route::get('/cart','ProductController@cart')->name('cart');
Route::get('/add-to-cart/{product}','ProductController@addToCart')->name('add_to_cart');
Route::get('/remove-cart/{id}','ProductController@remove')->name('remove-cart');
Route::get('/checkout','ProductController@checkout')->name('checkout');
Route::get('/wishlist','ProductController@wishlist')->name('wishList');
Route::get('/add-wishlist/{product}','ProductController@addWishlist')->name('add_wishlist');
Route::get('/remove/{id}','ProductController@removeWish')->name('remove');
Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('checkout_place_order');
Route::get('/product-detail/{id}','ProductController@product_detail')->name('product-detail');
Route::get('/dashboard','HomeController@dashboard')->name('dashboard');
Route::get('/posts','PostController@post')->name('posts');
Route::get('/post_show/{post:title}','PostController@show')->name('show');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

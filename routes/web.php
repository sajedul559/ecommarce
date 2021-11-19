<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/products', function () {
//     return view('products');
// });


Route::get('/product_details', function () {
    return view('product_details');
});

// Route::get('/account', function () {
//     return view('account')->name('account');
// });
Route::get('/account','UserController@account')->name('account');

// Route::get('/cart', function () {
//     return view('cart');
// });
Route::resource('/products', ProductController::class);
Route::resource('/users', UserController::class);

Route::get('/admin_products', 'ProductController@viewProduct')->name('admin.product');

Route::get('/test', 'ProductController@test');
Route::post('/add', 'ProductController@addProduct')->name('add');

Route::get('/product/show', 'ProductController@allProduct')->name('show.product');

Route::get('/product/details/{id}', 'ProductController@productDetails')->name('product.details');

Route::post('/add-to-cart','ProductController@addToCart')->name('add.cart');
Route::get('/view-cart','ProductController@viewCart')->name('view.cart');

Route::get('/remove-item/{rowId}','ProductController@removeItem')->name('view.cart');

Route::get('/','ProductController@home')->name('home');

Route::post('/products/validate-amount', '\App\Http\Controllers\ProductController@validateAmount');




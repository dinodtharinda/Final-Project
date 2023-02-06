<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Product\ProdcutController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistory;
use App\Http\Controllers\Order\CustomerOrderController;

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
    return view('welcome');
});
Route::view('/home', 'dashboard.customer.home')->name('home');
Route::get('/product-page', [ProdcutController::class , 'productPage'] )->name('products');
Route::get('/product-details-page/{id}', [ProdcutController::class , 'productDetailsPage'] )->name('productDetails');

Route::prefix('owner')->name('owner.')->group(function () {
    Route::middleware(['guest:owner', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.owner.login')->name('login');
        Route::post('/check', [OwnerController::class, 'check'])->name('check');
    });
    Route::middleware(['auth:owner', 'PreventBackHistory'])->group(function () {
        Route::post('/logout', [OwnerController::class, 'logout'])->name('logout');
        Route::resource('/products', ProdcutController::class);
        Route::view('/index', 'dashboard.owner.index')->name('index');
    });
});

Route::prefix('customer')->name('customer.')->group(function () {



    Route::middleware(['guest:customer', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.customer.login')->name('login');
        Route::view('/register', 'dashboard.customer.register')->name('register');
        Route::post('/store', [CustomerController::class, 'store'])->name('store');
        Route::post('/check', [CustomerController::class, 'check'])->name('check');
    });


    Route::middleware(['auth:customer', 'PreventBackHistory'])->group(function () {
        Route::post('/logout', [CustomerController::class, 'logout'])->name('logout');
        Route::get('/cart', [CartController::class,'index'])->name('cart');
        Route::post('/cart-add', [CartController::class,'addProduct'])->name('productAddToCart');
        Route::post('/cart-decrement-quantity', [CartController::class,'decrementQuantity'])->name('decrementQuantity');
        Route::post('/cart-increment-quantity', [CartController::class,'incrementQuantity'])->name('incrementQuantity');
        Route::get('/cart-remove-from-cart/{id}', [CartController::class,'removeFromCart'])->name('removeFromCart');
        Route::get('/cart-fetch', [CartController::class,'fetchSummary'])->name('fetchSummary');
        Route::get('/add-order', [CustomerOrderController::class,'addOrder'])->name('addOrder');
        Route::get('/order', [CustomerOrderController::class,'index'])->name('orderPage');


    });
});

Auth::routes();



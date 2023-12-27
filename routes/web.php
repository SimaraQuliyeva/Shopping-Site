<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\front\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.pages.index');
})->name('front.home');

Route::get('/signup', function () {
    return view('front.pages.signup');
})->name('front.signup');

Route::post('/signup' , [\App\Http\Controllers\front\AuthController::class, 'register'])->name('front.register');

Route::get('/login', function () {
    return view('front.pages.login');
})->name('front.login');

Route::post('/login' , [\App\Http\Controllers\front\AuthController::class, 'login'])->name('front.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('front.logout');

Route::get('/products' , [\App\Http\Controllers\front\ProductController::class, 'index'])->name('front.products');

Route::get('/product/{id}' , [\App\Http\Controllers\front\ProductController::class, 'show'])->name('front.product');
Route::post('/cart' , [\App\Http\Controllers\front\CartController::class, 'productForm'])->name('front.productForm');



Route::get('/cart' , [\App\Http\Controllers\front\CartController::class, 'productForm'])->name('front.cart');
Route::post('/addtocart' , [\App\Http\Controllers\front\CartController::class, 'productForm'])->name('front.addtocart');
Route::post('/removeProduct' , [\App\Http\Controllers\front\ProductController::class, 'removeProduct'])->name('front.removeProduct');


Route::post('/checkout' , [\App\Http\Controllers\front\OrderController::class, 'checkout'])->name('front.checkout');
Route::get('/checkout' , [\App\Http\Controllers\front\OrderController::class, 'formCheck'])->name('front.formCheck');


Route::get('/thank-you' , [\App\Http\Controllers\front\OrderController::class, 'showThankYou'])->name('front.thankyou');

Route::post('/thank-you' , [\App\Http\Controllers\front\OrderController::class, 'thankYou']);



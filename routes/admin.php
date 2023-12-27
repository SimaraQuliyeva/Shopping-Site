<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.login.post');

Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');



Route::get('/users', [AdminController::class, 'getUsers'])->name('admin.users');

Route::get('/products', [AdminController::class, 'getProducts'])->name('admin.products');


Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::post('/profile', [AdminController::class, 'updateProfile']);

Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');

Route::post('/destroy', [ProductController::class, 'destroy'])->name('admin.products.destroy');

Route::post('/updateProducts', [ProductController::class, 'updateProducts'])->name('admin.products.updateProducts');
Route::get('/updateProducts', [ProductController::class, 'updateProducts'])->name('admin.products.updateProducts');
Route::post('/update', [ProductController::class, 'update'])->name('admin.products.update');


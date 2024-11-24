<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\User\WawasanController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\OrderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('client.index');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/wawasan', [WawasanController::class, 'index'])->name('wawasan');
    Route::get('/product/{id}', [HomepageController::class, 'view'])->name('view');
    Route::post('/product/cart', [HomepageController::class, 'cartStore'])->name('cart.store');
    Route::get('/cart', [HomepageController::class, 'cartView'])->name('cart.view');
    Route::get('/cart/{id}', [HomepageController::class, 'cartDestroy'])->name('cart.destroy');
    
    Route::get('/checkout', [HomepageController::class, 'checkout'])->name('checkout');
    
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/reviews', [DashboardController::class, 'reviews'])->name('reviews');

    Route::get('/products', [DashboardController::class, 'products'])->name('products');
    Route::get('/product/store', [ProductController::class, 'form'])->name('product.form');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/update/{id}', [ProductController::class, 'view'])->name('product.view');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/content', [DashboardController::class, 'content'])->name('content');
    Route::get('/content/store', [ContentController::class, 'form'])->name('content.form');
    Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');
    Route::get('/content/update/{id}', [ContentController::class, 'view'])->name('content.view');
    Route::post('/content/update/{id}', [ContentController::class, 'update'])->name('content.update');
    Route::get('/content/destroy/{id}', [ContentController::class, 'destroy'])->name('content.destroy');
});

require __DIR__.'/auth.php';

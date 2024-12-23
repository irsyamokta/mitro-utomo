<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\User\WawasanController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\Admin\AdminOrderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/wawasan', [WawasanController::class, 'index'])->name('wawasan');
    Route::get('/myproduct/{id}', [HomepageController::class, 'view'])->name('view');
    Route::post('/myproduct/cart', [HomepageController::class, 'cartStore'])->name('cart.store');
    Route::get('/cart', [HomepageController::class, 'cartView'])->name('cart.view');
    Route::post('/quantity/update/{id}', [HomepageController::class, 'updateQuantity'])->name('cart.update');
    Route::get('/cart/{id}', [HomepageController::class, 'cartDestroy'])->name('cart.destroy');

    Route::get('/search', [HomepageController::class, 'search'])->name('search');

    Route::get('/checkout', [HomepageController::class, 'checkout'])->name('checkout');
    Route::post('/direct/checkout', [OrderController::class, 'checkout'])->name('direct.checkout');

    Route::post('/order', [OrderController::class, 'checkout'])->name('order.store');
    Route::get('/order/detail', [OrderController::class, 'index'])->name('order.detail');
    Route::post('/order/confirm/{id}', [OrderController::class, 'confirm'])->name('order.confirm');

    Route::get('/midtrans/payment', [MidtransController::class, 'index'])->name('midtrans.payment');

    Route::get('/review/{id}', [ReviewController::class, 'index'])->name('review');
    Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/testimoni', [ReviewController::class, 'view'])->name('review.testimoni');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/user/update/{id}', [DashboardController::class, 'viewUser'])->name('user.view');
    Route::post('/user/update/{id}', [DashboardController::class, 'updateUser'])->name('user.update');
    Route::get('/user/destroy/{id}', [DashboardController::class, 'destroyUser'])->name('user.destroy');
    
    Route::get('/reviews', [DashboardController::class, 'review'])->name('reviews');

    Route::get('/products', [DashboardController::class, 'products'])->name('products');
    Route::get('/product/store', [ProductController::class, 'form'])->name('product.form');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/update/{id}', [ProductController::class, 'view'])->name('product.view');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders');
    Route::get('/orders/update/{id}', [AdminOrderController::class, 'view'])->name('order.view');
    Route::post('/orders/update/{id}', [AdminOrderController::class, 'update'])->name('order.update');

    Route::get('/content', [DashboardController::class, 'content'])->name('content');
    Route::get('/content/store', [ContentController::class, 'form'])->name('content.form');
    Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');
    Route::get('/content/update/{id}', [ContentController::class, 'view'])->name('content.view');
    Route::post('/content/update/{id}', [ContentController::class, 'update'])->name('content.update');
    Route::get('/content/destroy/{id}', [ContentController::class, 'destroy'])->name('content.destroy');
});

require __DIR__.'/auth.php';

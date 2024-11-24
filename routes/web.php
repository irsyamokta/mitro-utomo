<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.index');
});

Route::get('/home', function () {
    return view('client.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/product', function () {
        return view('client.auth.product.detail');
    });
    Route::get('/cart', function () {
        return view('client.auth.product.cart');
    });
    Route::get('/checkout', function () {
        return view('client.auth.product.checkout');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

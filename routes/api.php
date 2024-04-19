<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('registration');
    Route::post('/login', [\App\Http\Controllers\RegisterController::class, 'login'])->name('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\RegisterController::class, 'logout'])->name('logout');
    Route::get('/favorite/{product}', [\App\Http\Controllers\FavoriteController::class, 'toggle'])->name('favorite.toggle');
});

Route::prefix('cart')->group(function () {
    Route::get('/add/{product}', [\App\Http\Controllers\CartController::class, 'addToCompare'])->name('cart.add.product');
    Route::get('/remove/{product}', [\App\Http\Controllers\CartController::class, 'removeFromCompare'])->name('cart.remove.product');
    Route::get('/clear', [\App\Http\Controllers\CartController::class, 'clearCompareList'])->name('cart.clear');
});

Route::post('/test', [\App\Http\Controllers\ParseDNSController::class, 'test']);

Route::prefix('/megafon')->group(function () {
    Route::prefix('/parse')->group(function () {
        Route::get('/product-links', [\App\Http\Controllers\ParseDNSController::class, 'parseProductLinks']);
        Route::get('/product-characteristics', [\App\Http\Controllers\ParseDNSController::class, 'parseCharacteristics']);
        Route::get('/parseProductLinksFromCatalog', [\App\Http\Controllers\ParseDNSController::class, 'parseProductLinksFromCatalog']);
        Route::get('/addCategoryToProductLink', [\App\Http\Controllers\ParseDNSController::class, 'addCategoryToProductLink']);
    });
});


Route::get('/', function () {
    $product = \App\Models\Product::first();
    return new \Illuminate\Http\JsonResponse($product);
});


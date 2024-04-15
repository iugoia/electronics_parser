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
    return view('welcome');
})->name('welcome');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/product/{product}', [\App\Http\Controllers\CatalogController::class, 'show'])->name('product');

Route::get('/comparison', function () {
    return view('comparison');
})->name('comparison');

Route::get('/favorite', function () {
    return view('favorite');
})->name('favorite');

Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

});

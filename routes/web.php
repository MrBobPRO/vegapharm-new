<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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

// Routes for the default locale must be located at the top
Route::get('/', [MainController::class, 'home'])->name('default.home');
Route::get('/products', [ProductController::class, 'index'])->name('default.products.index');

Route::prefix('{locale}')->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

require __DIR__.'/auth.php';
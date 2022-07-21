<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Models\Locale;
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

Route::prefix(parseLocale())->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

function parseLocale()
{
    $locale = request()->segment(1);
    $locales = Locale::pluck('value')->toArray();
    $default = Locale::getDefaultValue();

    if ($locale !== $default && in_array($locale, $locales)) {
        app()->setLocale($locale);

        return $locale;
    }
}

require __DIR__ . '/auth.php';

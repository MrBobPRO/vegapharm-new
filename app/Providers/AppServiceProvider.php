<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Locale;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.header'], function ($view) {
            $view->with('locales', Locale::all());
        });

        View::composer(['components.categories-filter'], function ($view) {
            $view->with('categories', Category::join('category_translations', function($join) {
                $join->on('categories.id', '=', 'category_translations.category_id');
                $join->where('category_translations.locale', '=', app()->getLocale());
            })
            ->select('categories.*', 'category_translations.title')
            ->orderBy('title')
            ->get());
        });

        View::composer(['components.search-filter'], function ($view) {
            $view->with('products', Product::join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.title')
            ->orderBy('title')
            ->get());
        });

        View::composer(['components.popular-products-list'], function ($view) {
            $view->with('products', Product::where('popular', true)->inRandomOrder()->take(6)->get());
        });
    }
}

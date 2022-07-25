<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::join('category_translations', function($join) {
                $join->on('categories.id', '=', 'category_translations.category_id');
                $join->where('category_translations.locale', '=', app()->getLocale());
            })
            ->orderBy('title')
            ->get();

        $searchProducts = Product::join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->orderBy('title')
            ->get();

        $products = Product::join('product_translations', function($join) {
            $join->on('products.id', '=', 'product_translations.product_id');
            $join->where('product_translations.locale', '=', app()->getLocale());
        })
        ->orderBy('title')
        ->paginate(7);

        $popularProducts = Product::where('popular', true)->inRandomOrder()->get();

        return view('products.index', compact('categories', 'searchProducts', 'products', 'popularProducts'));
    }
}

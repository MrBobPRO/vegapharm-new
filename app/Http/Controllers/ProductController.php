<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description')
            ->orderBy('title')
            ->paginate(12);

        $popularProducts = Product::where('popular', true)
            ->join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description')
            ->inRandomOrder()
            ->get();

        return view('products.index', compact('products', 'popularProducts'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        
        $categoryIds = $product->categories()->pluck('id')->toArray();

        $similarProducts = Product::whereHas('categories', function ($q) use ($categoryIds) {
                $q->whereIn('id', $categoryIds);
            })
            ->join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description')
            ->where('products.id', '!=', $product->id)
            ->inRandomOrder()
            ->get();

        $popularProducts = Product::where('popular', true)
            ->join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description')
            ->inRandomOrder()
            ->get();

        return view('products.show', compact('product', 'similarProducts', 'popularProducts'));
    }
}

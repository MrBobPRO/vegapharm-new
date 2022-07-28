<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\AnonymousComponent;

class ProductController extends Controller
{
    /**
     * Return filtered paginated products for the request
     *
     * @param \Illuminate\Http\Response $request
     * @return \Illuminate\Database\Eloquest\Collection
     */
    public function filter($request)
    {
        $products = Product::join('product_translations', function ($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description');

        // filter prescription
        $prescription = $request->prescription;
        if($prescription != null && $prescription != 'all') {
            $products = $products->where('prescription', $prescription);
        }

        // filter category
        $categoryId = $request->category_id;
        if($categoryId && $categoryId != 'all') {
            $products = $products->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('id', $categoryId);
            });
        }

        // Validate pagination appends
        $appendExcepts = ['page', 'token'];
        if($request->prescription == null || $request->prescription == 'all') {
            array_push($appendExcepts, 'prescription');
        }
        if(!$categoryId || $categoryId == 'all') {
            array_push($appendExcepts, 'category_id');
        }

        $products = $products->orderBy('title')
            ->paginate(12)
            ->appends($request->except($appendExcepts))
            ->fragment('products-section');

        return $products;
    }

    public function index(Request $request)
    {
        $products = $this->filter($request);
        $products->withPath(route('products.index'));

        $popularProducts = Product::where('popular', true)
            ->join('product_translations', function($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->select('products.*', 'product_translations.image', 'product_translations.title', 'product_translations.description')
            ->inRandomOrder()
            ->get();

        $greetingProducts = Product::where('displayOnGreeting', true)->inRandomOrder()->take(6)->get();

        return view('products.index', compact('request', 'products', 'popularProducts', 'greetingProducts'));
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

    public function ajaxGet(Request $request)
    {
        $products = $this->filter($request);
        $products->withPath(route('products.index'));
        
        return Blade::renderComponent(
            new AnonymousComponent(view('components.products-list'), ['products' => $products])
        );

    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $products = Product::join('product_translations', function ($join) {
                $join->on('products.id', '=', 'product_translations.product_id');
                $join->where('product_translations.locale', '=', app()->getLocale());
            })
            ->where(function ($q) use ($keyword) {
                $q->where('product_translations.title', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('product_translations.description', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('product_translations.composition', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('product_translations.indication', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('product_translations.use', 'LIKE', '%' . $keyword . '%');
            })
            ->select('products.id*', 'product_translations.title');

        return $products;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Category;
use App\Models\Presence;
use App\Models\Star;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {   
        $stars = Star::all();
        $achievements = Achievement::orderBy('year')->get();

        $categories = Category::join('category_translations', function($join) {
                $join->on('categories.id', '=', 'category_translations.category_id');
                $join->where('category_translations.locale', '=', app()->getLocale());
            })
            ->orderBy('title')
            ->get();

        $cities = Presence::where('type', 'city')->get();
        $countries = Presence::where('type', 'country')->get();

        return view('home.index', compact('stars', 'achievements', 'categories', 'cities', 'countries'));
    }
}
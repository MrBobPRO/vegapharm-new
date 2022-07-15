<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\Star;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function redirectToMainLocale()
    {
        $mainLocale = Locale::where('main', true)->first()->value;

        return redirect()->route('home', ['locale' => $mainLocale]);
    }

    public function home()
    {
        $star = Star::first();

        return view('home.index', compact('star'));
    }
}
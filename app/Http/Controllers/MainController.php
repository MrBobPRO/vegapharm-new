<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $star = Star::first();

        return view('home.index', compact('star'));
    }
}

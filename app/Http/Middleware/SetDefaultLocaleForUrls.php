<?php

namespace App\Http\Middleware;

use App\Models\Locale;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetDefaultLocaleForUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->locale) {
            URL::defaults(['locale' => $request->locale]);
            
            app()->setLocale($request->locale);

        } else {
            URL::defaults(['locale' => Locale::where('main', true)->first()->value]);
            
            app()->setLocale(Locale::where('main', true)->first()->value);
        }

        return $next($request);
    }
}
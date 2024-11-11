<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
     public function handle($request, Closure $next)
    {
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            App::setLocale($lang);
            Session::put('applocale', $lang);
        } else {
            App::setLocale(Session::get('applocale', config('app.locale')));
        }

        return $next($request);
    }
}

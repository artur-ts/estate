<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //todo move to config
        $allowed_langs = [
            'am',
            'ru',
            'en'
        ];
        $lang = (in_array($request->language, $allowed_langs)) ? $request->language : 'am';
        App::setLocale($lang);
        return $next($request);
    }
}

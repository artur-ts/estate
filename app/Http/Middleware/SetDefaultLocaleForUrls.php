<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetDefaultLocaleForUrls
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
        $allowed_langs = [
          'am',
          'ru',
          'en'
        ];

        $lang = (in_array($request->segment(1), $allowed_langs)) ? $request->segment(1) : 'am';
        URL::defaults(['language' => $lang]);

        return $next($request);
    }
}

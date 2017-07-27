<?php

namespace App\Http\Middleware;

use Closure;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sp_lang = \Config::get('setting_admin.support_lang');
        if (session()->has('lang')) {
            if (is_null(session()->get('lang')) || empty(session()->get('lang')) || !in_array( session()->get('lang'), $sp_lang)) {
                app()->setLocale('en');
            }
            app()->setLocale(session()->get('lang'));
        }else{
            app()->setLocale('en');
        }
        return $next($request);
    }
}

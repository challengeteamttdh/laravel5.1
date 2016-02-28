<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App;
class LocaleMiddleware
{

    protected $languages = ['en', 'vi'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('locale') && in_array(Session::get('locale'), $this -> languages)) {
            App:setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}

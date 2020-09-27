<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //check if login or guest
    public function handle($request, Closure $next)
    {
        if(@Auth::check()){
            return redirect() ->intended('admin/home');
        }
        return $next($request);
    }
}
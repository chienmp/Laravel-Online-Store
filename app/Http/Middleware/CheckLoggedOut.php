<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoggedOut
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //check whether logout or not
    public function handle($request, Closure $next)
    {
        if(@Auth::guest()){
            return redirect()->intended('login');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin
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
        if (Auth::guard($guard)->check() && Auth::user()->role->title == "administrator") 
        {
            return redirect('/admin/home');
        }
        else if (Auth::guard($guard)->check()) 
        {
            return back();
        }
        return $next($request);
    }
}

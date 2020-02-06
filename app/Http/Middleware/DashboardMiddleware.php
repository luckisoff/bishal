<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class DashboardMiddleware
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
        if(auth()->check())
        {
            if(count(auth()->user()->getAllPermissions())>0)
            {
                // if(auth()->user()->role()=='manager')
                // {
                    
                // }
                return $next($request);
            }
            

            Auth::logout();
        }
        return redirect()->route('dashboard.login');
    }
}

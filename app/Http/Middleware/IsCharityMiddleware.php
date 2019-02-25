<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsCharityMiddleware
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

        
        if (Auth::user()->role == 1)
        { 
            return redirect('dashboard');
            
        }
        elseif (Auth::user()->role == 0)
        {
            return redirect('/');
        } 

        return $next($request);
    }
}

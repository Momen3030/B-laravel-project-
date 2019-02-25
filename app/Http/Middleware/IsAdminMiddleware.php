<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsAdminMiddleware
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
    if(Auth::user()->id != $request->get('id'))
    {
      dd("you are not allowed to see this");
    }

    return $next($request);
  } 
}

<?php

namespace App\Http\Middleware;

use Session;

use Closure;

use Illuminate\Http\Request;

class CustomeAuth
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
        
      $path=$request->path();
    
           
        return $next($request);
    }
}

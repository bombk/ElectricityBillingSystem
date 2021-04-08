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

   // $name = Session::get('user');
    
  

    //  if(($path=="login" || $path=="register") && (Session::get('user'))){
    //     return redirect('home');


    // }
    // else if($path!='login' && !Session::get('user') && $path!='register' && !Session::get('user'))
    //   {
    //      return redirect('register');
    //  }

    return $next($request);
  }
}

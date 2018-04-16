<?php

namespace App\Http\Middleware;

use Closure;

class checkuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='admin')
    {
      /*  if($request->session()->get('username') === null){
           return  rediect('/login');

        }
       
        return $next($request);
    }*/

    if (!auth()->guard($guard)->check()) {
       return rediect('/'); # code...
    }
    return $next($request);
}

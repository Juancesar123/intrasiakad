<?php

namespace App\Http\Middleware;
use URL;
use Closure;

class authlogin
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
      if(session('token')){
        return redirect('homepage');
      }else{
        return $next($request);
      }
    }
}

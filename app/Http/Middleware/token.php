<?php

namespace App\Http\Middleware;

use Closure;

class token
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
          return $next($request);
        }else{
          return redirect()->route('formLogin');
        }
    }
}

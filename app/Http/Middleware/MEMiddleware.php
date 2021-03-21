<?php

namespace App\Http\Middleware;

use Closure;

class MEMiddleware
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
        if(Auth::check() && Auth::user()->role == "me"){

            return $next($request); 
            }

            else{

                abort(403);
            }
    }
}

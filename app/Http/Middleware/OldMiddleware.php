<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
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
        if ($request->input('year') > 10) 
        {
            return redirect('andra/'. $request->input("year"));
        }
        return $next($request);
    }
}

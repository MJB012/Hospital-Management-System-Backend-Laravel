<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictByDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHttpHost();
        if($host !== '127.0.0.1:8000') {
            return response()->json('Permission not allowed',500);
        } 
        return $next($request);
    }
}

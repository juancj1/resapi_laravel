<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductProtectMiddleware
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
        $token = $request -> header('token');
        if ($token !== 'mangcoding-api'){
            return response () ->json (['akses ditolak'], 403); 
        }
        return $next($request);
    }
}

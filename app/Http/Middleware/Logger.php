<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Logger
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
        error_log($request);
        return $next($request);
    }
}

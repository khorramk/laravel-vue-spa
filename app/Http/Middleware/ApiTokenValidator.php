<?php

namespace App\Http\Middleware;

use Closure;

class ApiTokenValidator
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
        if ($request->is()) {
            # code...
        }
        return $next($request);
    }
}

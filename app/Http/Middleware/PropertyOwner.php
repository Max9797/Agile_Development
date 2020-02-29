<?php

namespace App\Http\Middleware;

use Closure;

class PropertyOwner
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
        echo 'You are the property owner';
        return $next($request);
    }
}

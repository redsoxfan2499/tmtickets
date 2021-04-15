<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsStaffMiddleware
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
        if(auth()->user()->is_staff || auth()->user()->is_admin) {
            return $next($request);
        } else {
            abort(403);
        }
    }
}

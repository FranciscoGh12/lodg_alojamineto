<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class RecepMiddleware
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
        $id = 2;
        if (Auth::check() && $request->user()->authorizeRoles(['user'])) {
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}

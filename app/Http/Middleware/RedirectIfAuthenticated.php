<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $suid=1;
        $adminid=2;
        $recepid=3;
        if (Auth::guard($guard)->check() && $request->user()->authorizeRoles(['su', 'admin']) ) {
            return redirect()->route('admin.dashboard');
        }elseif (Auth::guard($guard)->check() && $request->user()->authorizeRoles(['user'])) {
            return redirect()->route('recepcion.dashboard');
        }else{
            return $next($request);
        }


    }
}

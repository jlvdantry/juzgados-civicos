<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        log::debug('app/Http/Middleware/RedirectIfAuthenticated.php handle');
        if (Auth::guard($guard)->check()) {
            log::debug('app/Http/Middleware/RedirectIfAuthenticated.php va a redirigir a home');
            return redirect('/home');
        }
        log::debug('app/Http/Middleware/RedirectIfAuthenticated.php despues del if');
        return $next($request);
    }
}

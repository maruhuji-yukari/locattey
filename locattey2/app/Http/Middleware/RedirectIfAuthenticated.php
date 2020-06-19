<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
<<<<<<< HEAD
        if (Auth::guard($guard)->check() && $guard === 'user') {
            return redirect(RouteServiceProvider::HOME);
        }elseif(Auth::guard($guard)->check() && $guard === 'admin'){
            return redirect(RouteServiceProvider::ADMIN_HOME);
=======
        $redir = '/';
        switch ($guard){
            case "admin":
                $redir = 'admin/index';
                break;

            default:
                $redir = '/';
                break;
>>>>>>> master
        }

        if (Auth::guard($guard)->check()) {
 //           return redirect(RouteServiceProvider::HOME);
            return redirect($redir);
        }
        return $next($request);
    }
}

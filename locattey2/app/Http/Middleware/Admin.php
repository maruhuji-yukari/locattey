<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Admin extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin_login');
        }
    }

}

//
//namespace App\Http\Middleware;
//
//use Closure;
//use GuzzleHttp\Middleware;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Auth\AuthenticationException;
//
//class Admin
//
//{
//    /**
//     * Handle an incoming request.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @param \Closure $next
//     * @return mixed
//     */
//    public function handle($request, Closure $next)
//    {
////        return $next($request);
//        if (! $request->expectsJson()) {
//            return route('admin_login');
//        }
//        return $next($request);
//
//    }
//
////    protected function unauthenticated($request, AuthenticationException $exception)
////    {
////        return $request->expectsJson()
////            ? response()->json(['message' => $exception->getMessage()], 401)
////            : redirect()->guest(route('admin_login')); // ここを変更する
////    }
//}

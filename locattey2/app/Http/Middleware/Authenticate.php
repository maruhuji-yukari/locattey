<?php
//
//namespace App\Http\Middleware;
//
//use Illuminate\Auth\Middleware\Authenticate as Middleware;
//use Illuminate\Support\Facades\Route;
//
//class Authenticate extends Middleware
//{
//    /**
//     * Get the path the user should be redirected to when they are not authenticated.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return string|null
//     */
//
//
//    protected $user_route = 'user.login';
//    protected $admin_route = 'admin.login';
//
//
//    //ルーティングに応じて未ログイン時のリダイレクト先を振り分ける
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            if(Route::is('user.*')){
//                return route($this->user_route);
//            }elseif(Route::is('admin.*')){
//                return route($this->admin_route);
//            }
//        }
//    }
//}


namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{

    protected $user_route = 'user.login';
    protected $admin_route = 'admin.login';


    //ルーティングに応じて未ログイン時のリダイレクト先を振り分ける
=======
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
>>>>>>> master
    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            if(Route::get('user.*')){
//                return route($this->user_route);
//            }elseif(Route::get('admin.*')){
//                return route($this->admin_route);
//            }
//        }

        if(! $request->expectsJson()){
            if($request->is('user/*')){
                return route($this->user_route);
            }elseif($request->is('admin/*')){
                return route($this->admin_route);
            }
        }
    }
}


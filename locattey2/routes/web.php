<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});
//
//Auth::routes();
//
////メイン
//Route::get('/', 'HomeController@index')->name('home');
//
//Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register/new','Auth\RegisterController@register')->name('register-new');
//
//Route::get('login','Auth\LoginController@showLoginForm')->name('login');
//Route::post('login','Auth\LoginController@login')->name('login');
//
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//
//Route::get('/member/mypage','Member\MypageController@index')->name('mypage');
//
//Route::get('/member/trade_register','Member\MypageController@new')->name('register_trade');
//Route::post('/member/trade_register/new','Member\MypageController@create')->name('register_trade-new');

//User
Route::namespace('User')->prefix('user')->name('user.')->group(function(){

    //ログイン認証
    Auth::routes([
        'register'=>true,
        'reset'=>false,
        'verify'=>false,
    ]);

    //メイン
    Route::get('/user/home', 'User/HomeController@index')->name('home');


    //ログイン認証後
    Route::middleware('auth:user')->group(function(){

        //topページ
        Route::resource('home','HomeController',['only'=>'index']);

        //出品登録ページ
        Route::get('user/trade_register','Member\MypageController@new')->name('trade_register');
        Route::post('user/trade_register/new','Member\MypageController@create')->name('trade_register');

        //ログアウト
        Route::get('logout', 'User\Auth\LoginController@logout')->name('logout');

        //マイページ
        Route::get('/member/mypage','Member\MypageController@index')->name('mypage');
    });
});

    //管理者
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){

        //ログイン認証
        Auth::routes([
            'register'=>true,
            'reset'=>false,
            'verify'=>false,
        ]);

        //ログイン認証後
        Route::middleware('auth:admin')->group(function(){

            //topページ
            Route::resource('home','HHomeController',['only'=>'index']);
        });

});

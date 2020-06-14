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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

//管理人用画面
Route::get('/master/home','Master\HomeController@index')->name('master_home');
Route::get('master/login','Master\HomeController@loginView')->name('master_loginView');
Route::post('master/login','Master\HomeController@login')->name('master_login');


//メイン
Route::get('/', 'HomeController@index')->name('home');

Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/new','Auth\RegisterController@register')->name('register-new');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/member/mypage','Member\MypageController@index')->name('mypage');

Route::get('/member/trade_register','Member\MypageController@new')->name('register_trade');
Route::post('/member/trade_register/new','Member\MypageController@create')->name('register_trade-new');

<?php

use App\Http\Middleware\Admin;
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

Route::get('/admin/index', function () {
    return view('admin.index');
});

Auth::routes();

Route::middleware(['admin'])->group(function(){
    Route::get('admin/login','Admin\LoginController@showLoginForm')->name('admin_login');
    Route::post('admin/login','Admin\LoginController@login')->name('admin_login_post');
    Route::post('admin/logout','Admin\LoginController@logout')->name('admin_logout');
    Route::get('admin/register','Admin\RegisterController@showRegisterForm')->name('admin_register');
    Route::post('admin/register','Admin\RegisterController@register')->name('admin_register_post');
});


//Route::group(['prefix'=>''],function(){
//    Route::get('admin/login','Admin\LoginController@showLoginForm')->name('admin_login');
//    Route::post('admin/login','Admin\LoginController@login')->name('admin_login_post');
//    Route::post('admin/logout','Admin\LoginController@logout')->name('admin_logout');
//
//    Route::get('admin/register','Admin\RegisterController@showRegisterForm')->name('admin_register');
//    Route::post('admin/register','Admin\RegisterController@register')->name('admin_register_post');
//});



Route::get('/master','Master\HomeController@index')->name('master_index');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>''],function(){
    Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register/new','Auth\RegisterController@register')->name('register-new');

    Route::get('login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login');

    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/member/mypage','Member\MypageController@index')->name('mypage');

    Route::get('/member/trade_register','Member\MypageController@new')->name('register_trade');
    Route::post('/member/trade_register/new','Member\MypageController@create')->name('register_trade-new');
});


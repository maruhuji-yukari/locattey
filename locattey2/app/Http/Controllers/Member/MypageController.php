<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //マイページ表示
    public function index(){
        return view('member.mypage');
    }

    //出品する表示
    public function new(){
        return view('member.trade_register');
    }

    //出品するpost ver
    public function create(Request $request){
        $request->validate([
            'trade_name'=> 'required | string | max:255',
            'trade_category' => 'required | string | max:255',
            'trade_comment' => 'required | string | max:500',
            'trade_img1' => 'required | mimetypes:text/plain | mimes:jpeg,jpg,png,gif',
            'trade_img2' => 'nullable | mimetypes:text/plain | mimes:jpeg,jpg,png,gif',
            'trade_img3' => 'nullable | mimetypes:text/plain | mimes:jpeg,jpg,png,gif',
            'trade_img4' => 'nullable | mimetypes:text/plain | mimes:jpeg,jpg,png,gif',
            'trade_img5' => 'nullable | mimetypes:text/plain | mimes:jpeg,jpg,png,gif',
            'category_id' => 'required | Integer | max:11',
            'users_id' => 'required | Integer | max:11',
        ]);
        $users_id = Auth::id();
        return redirect('/member/mypage')->with('flash_message', __('Registered.'));
    }
}

<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    //マイページ表示
    public function index(){
        return view('member.mypage');
    }
}

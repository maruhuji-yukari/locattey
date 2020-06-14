<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //管理人画面トップビュー
    public function index(){
        return view('master.index');
    }

    //管理人画面ログインビュー
    public function loginView(){
        return view('master.login');
    }

    //管理人画面ログイン postの部分
    public function login(Request $request){
        $this->validate($request,[
           'managers_name'=>'required | string',
            'managers_password'=>'required | string',
            'managers_email'=>'required | email',
        ]);

        if(Auth::attempt([
           'managers_email'=>$request->input('managers_email'),
            'managers_password'=>$request->input('managers_password'),
            'managers_name'=>$request->input('managers_name')
        ])){
            return redirect('/master/index')->with('flash_message', __('Login'));
        }
    }
}

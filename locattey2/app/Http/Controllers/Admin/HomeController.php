<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //コンストラクト
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.index');
    }
}

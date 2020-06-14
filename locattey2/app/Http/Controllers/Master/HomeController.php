<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //管理人ビュー
    public function index(){
        return view('master.index');
    }
}

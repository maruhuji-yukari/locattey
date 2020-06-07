<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //出品リスト兼トップページ
    public function index(){
        return view('index');
    }
}

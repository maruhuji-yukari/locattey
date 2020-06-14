<?php

namespace App\Http\Controllers\Member;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MypageController extends Controller
{
    //マイページ表示
    public function index(){
        return view('member.mypage');
    }

    //出品する表示
    public function new(){
        $users_id = Auth::id();
        $categories = Categories::all();

        //一時保存した画像のurl



        return view('member.trade_register',compact('users_id','categories'));
    }

    //出品するpost ver
    public function create(ProductRequest $request){

        //画像アップロード
        //これが元
        $request->product_image1->storeAs('public/uploads',time().'_1_'.Hash::make('sample').'.jpg');
//        if($request->hasFile('product_image2')) {
//            $request->product_image2->storeAs('public/uploads', time() . '_2_' . Hash::make('sample') . '.jpg');
//        }

       $product_images = [ 'product_image2','product_image3','product_image4','product_image5' ];
       foreach ($product_images as $product_image){
           if($request->hasFile($product_image)){
               $request->$product_image->storeAs('public/uploads', time() . Hash::make('sample') . '.jpg');
           }
       }
        //新規登録
        $product = new Product();
        $product->fill($request->all())->save();
        return redirect('/member/mypage')->with('flash_message', __('Registered.'));
    }
}

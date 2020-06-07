@extends('layouts.common')

@section('page_title','会員登録')

@include('layouts.header')

@include('layouts.menu')

@include('layouts.navi')

@section('section_title','会員登録')
@section('main_content')

    <form action="{{ route('register') }}" method="post" class="register_form">
        @csrf
        <div class="errorMsg">
            <ul>
                <li>ここにエラーメッセージ表示</li>
                <li>ここにエラーメッセージ表示</li>
            </ul>
        </div>
        <label for="username" class="register_label">お名前(3文字以上):</label>
        <input type="text" id="username" name="username" class="register_input" placeholder="お名前">

        <label for="email" class="register_label">メールアドレス:</label>
        <input type="email" id="email" name="email" class="register_input" placeholder="メールアドレス">

        <label for="password" class="register_label">パスワード(6文字以上):</label>
        <input type="text" id="password" name="password" class="register_input" placeholder="パスワード">

        <label for="password" class="register_label">パスワード(6文字以上、上記と同じもの):</label>
        <input type="text" id="password_re" name="password_re" class="register_input" placeholder="パスワード">

        <input type="submit" class="register_submit" value="登録">
    </form>
    <div class="msg_link">
        <ul>
            <li>会員登録がお済みの方は<a href="{{ route('login') }}">こちら</a></li>
        </ul>
    </div>

@endsection

@include('layouts.main_menu')

@include('layouts.footer')


@extends('layouts.common')

@section('page_title','会員登録')

@include('layouts.header')

@include('layouts.menu')

@include('layouts.navi')

@section('section_title','会員登録')
@section('main_content')

    <form action="{{ route('register') }}" method="post" class="register_form">
        @csrf
        <label for="name" class="register_label">お名前(3文字以上):</label>
        <input type="text" id="name" name="name" class="register_input @error('name') is-invalid @enderror " placeholder="お名前" required>
        @error('name')
        <span class="errorMsg" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="email" class="register_label">メールアドレス:</label>
        <input type="email" id="email" name="email" class="register_input @error('email') is-invalid @enderror" placeholder="メールアドレス" required>
        @error('email')
        <span class="errorMsg" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password" class="register_label">パスワード(6文字以上):</label>
        <input type="text" id="password" name="password" class="register_input  @error('password') is-invalid @enderror  " placeholder="パスワード" required>
        @error('password')
        <span class="errorMsg" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password_confirmation" class="register_label">パスワード(6文字以上、上記と同じもの):</label>
        <input type="text" id="password_confirmation" name="password_confirmation" class="register_input @error('password_confirmation') is-invalid @enderror " placeholder="パスワード" required>
        @error('password_confirmation')
        <span class="errorMsg" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
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


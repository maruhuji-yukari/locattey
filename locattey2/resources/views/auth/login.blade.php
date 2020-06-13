@extends('layouts.common')

@section('page_title','ログイン')

@include('layouts.header')

@include('layouts.menu')

@include('layouts.navi')

@section('section_title','ログイン')
@section('main_content')
  <form action="{{ route('login') }}" method="post" class="register_form">
      @csrf
        <label for="email" class="register_label">メールアドレス:</label>
        <input type="email" id="email" name="email" class="register_input @error('email') is-invalid @enderror" placeholder="メールアドレス">
          @error('email')
          <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror
        <label for="password" class="register_label">パスワード(6文字以上):</label>
        <input type="text" id="password" name="password" class="register_input @error('password') is-invalid @enderror" placeholder="パスワード">
          @error('password')
          <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror
        <input type="submit" class="register_submit" value="ログイン">
    </form>
    <div class="msg_link">
        <ul>
            <li>会員登録がお済みで無い方は<a href="{{ route('register') }}">こちら</a></li>
            <li>パスワードを紛失された方は再発行してください。>><a href="reissue.html">再発行ページ</a>へ</li>
        </ul>
    </div>
@endsection

@include('layouts.main_menu')

@include('layouts.footer')

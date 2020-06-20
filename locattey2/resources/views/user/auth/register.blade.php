@extends('user.layouts.common')

@section('page_title','新規登録')

@include('user.layouts.header')

@include('user.layouts.menu')

@include('user.layouts.navi')

@section('section_title','新規登録')
@section('main_content')
    <div class="register">
        <div class="register_content">
            <form action="{{ route('user.register') }}" class="form">
                @csrf
                <label for="" class="register_label">名前:</label>
                <input type="text" class="register_input" name="name" placeholder="名前">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="register_label">メールアドレス:</label>
                <input type="email" class="register_input" name="email" required placeholder="メールアドレス形式で入力してください">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="register_label">パスワード(6文字以上):</label>
                <input type="password" class="register_input" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="register_label">パスワード(上記と同じもの):</label>
                <input type="password" class="register_input" name="password-confirm" required>
                @error('password-confirm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="register_submit">新規登録</button>
            </form>
        </div>
    </div>

@endsection

@include('user.layouts.main_menu')

@include('user.layouts.footer')


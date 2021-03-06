@extends('user.layouts.common')

@section('page_title','ログイン')

@include('user.layouts.header')

@include('user.layouts.menu')

@include('user.layouts.navi')

@section('section_title','ログイン')
@section('main_content')
    <div class="register">
        <div class="register_content">
            <form action="{{ route('user.login') }}" class="form">
                @csrf
                <label for="" class="register_label">メールアドレス:</label>
                <input type="email" class="register_input" name="email" required placeholder="メールアドレス形式で入力してください">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="register_label">パスワード:</label>
                <input type="password" class="register_input" name="password" required placeholder="パスワード">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="checkbox" class="checkbox" name="remember">
                <label for="remember">{{ __('Remember Me') }}</label>
                @error('remember')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="register_submit">ログイン</button>
            </form>
        </div>
    </div>

@endsection
@include('user.layouts.main_menu')

@include('user.layouts.footer')


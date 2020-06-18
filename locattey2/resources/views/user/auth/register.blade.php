@extends('user.layouts.common')

@section('page_title','新規登録')

@include('user.layouts.header')

@include('user.layouts.menu')

@include('user.layouts.navi')

@section('section_title','新規登録')
@section('main_content')
    <div class="news">
        <div class="section">
            <form action="{{ route('user.register') }}" class="form">
                @csrf
                <label for="" class="label">名前:</label>
                <input type="text" class="input" placeholder="名前">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="label">メールアドレス:</label>
                <input type="email" class="input" name="email" required placeholder="メールアドレス形式で入力してください">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="label">パスワード(6文字以上):</label>
                <input type="password" class="input" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="" class="label">パスワード(上記と同じもの):</label>
                <input type="password" class="input" name="password_confirmation" required>
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="submit">{{ __('Register') }}</button>
            </form>
        </div>
    </div>

    <h3 class="main_title"><i class="fas fa-external-link-alt"></i> {{ __('Category') }}</h3>
    @include('user.layouts.category_list')

@endsection

@include('user.layouts.main_menu')

@include('user.layouts.footer')


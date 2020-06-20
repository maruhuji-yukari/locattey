@extends('admin.layouts.common')

@section('page_title','管理人新規登録')

@include('admin.layouts.header')

@section('main')
    <div class="section">
        <h2 class="section_title">管理人新規登録:</h2>
        <form action="{{ route('admin.register') }}" method="POST" class="form">
            @csrf
            <label for="" class="label">ログイン用名前</label>
            <input type="text" name="name" class="input" required placeholder="ログイン用名前">
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label class="label">ログイン用アドレス:</label>
            <input type="email" name="email" class="input" required placeholder="ログイン用アドレス">
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label class="label">ログイン用パスワード(6文字以上):</label>
            <input type="password" name="password" class="input" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label class="label">ログイン用パスワード(上と同じもの):</label>
            <input type="password" name="password-confirm" class="input" required>
            @error('password-confirm')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <button type="submit" class="submit">{{ __('Register') }}</button>
        </form>
    </div>

@endsection

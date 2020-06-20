@extends('admin.layouts.common')

@section('page_title','管理用画面')

@include('admin.layouts.header')

@section('main')
    <div class="section">
        <h2 class="section_title">管理人ページログイン</h2>
        <form action="{{ route('admin.login') }}" method="POST" class="form">
            @csrf
            <label class="label">ログイン用アドレス</label>
            <input type="text" name="email" class="input">

            <label class="label">ログイン用パスワード</label>
            <input type="text" name="password" class="input">

            <button type="submit" class="submit">{{ __('Login') }}</button>
        </form>
    </div>
@endsection

@extends('admin.layouts.common')

@section('page_title','管理用画面')

@include('admin.layouts.header')

@section('main')
    <div class="section">
        <h2 class="section_title">管理人ページログイン</h2>
        <form action="" method="POST" class="form">
            @csrf
            <label class="label">ログイン用アドレス</label>
            <input type="text" name="name" class="input">

            <label class="label">ログイン用パスワード</label>
            <input type="text" name="password" class="input">

            <input type="submit" value="{{ __('Login') }}" class="submit">
        </form>
    </div>

@endsection

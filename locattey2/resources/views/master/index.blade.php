@extends('master.layouts.common')

@section('page_title','管理人用画面')

@include('master.layouts.header')

@section('main')
    <div class="main">
        <div class="section">
            <h2 class="section_title">お知らせ登録・変更・削除</h2>
            <ul class="section_list">
                <li>過去のお知らせ</li>
                <li>お知らせ 新規登録</li>
                <li>お知らせ 変更</li>
                <li>お知らせ 削除(基本的に触らない)</li>
            </ul>
        </div>
        <div class="section">
            <h2 class="section_title">よくある質問登録・変更・削除</h2>
            <ul class="section_list">
                <li>よくある質問一覧</li>
                <li>よくある質問 新規登録</li>
                <li>よくある質問 変更</li>
                <li>よくある質問 削除</li>
            </ul>
        </div>
    </div>
    <p class="links"><a href="{{ route('logout') }}">ログアウト</a></p>

@endsection

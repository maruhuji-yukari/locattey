@extends('admin.common')

@section('page_title','ログイン | 管理人用画面')

@section('main')
    <div class="section">
        <h2>ログイン</h2>
        <form action="{{ route('admin_login') }}" method="POST">
            @csrf
            <label class="label">ログイン用メールアドレス</label>
            <input type="email" class="input" required placeholder="E-mail">



        </form>
    </div>
@endsection

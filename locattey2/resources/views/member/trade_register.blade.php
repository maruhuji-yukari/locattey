@extends('layouts.common')

@section('page_title','出品する')

@include('layouts.header')

@include('layouts.menu')

@include('layouts.navi')

@section('section_title','出品する')
@section('main_content')
    <form action="{{ route('trade_register') }}" method="post" class="register_form" enctype="multipart/form-data">
        <div class="errorMsg">
        </div>
        <label for="trade_name" class="register_label">出品タイトル(50文字以上):</label>
        <input type="text" id="trade_name" name="trade_name" class="register_input @error('trade_name') is-invalid @enderror" placeholder="出品タイトル" required>
{{--        <span class="errorMsg" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--        </span>--}}

        <label for="category_id" class="register_label">カテゴリー:</label>
        <select name="category_id" id="category_id" class="register_select @error('trade_category') is-invalid @enderror" required>
            <option value="0">▼選択してください</option>
            <option value="1">家電</option>
            <option value="2">アウトドア</option>
            <option value="3">小物</option>

        </select>
{{--        <span class="errorMsg" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--        </span>--}}

        <label for="trade_comment" class="register_label">概要(500文字以内):</label>
        <textarea name="trade_comment" id="trade_comment" class="register_textarea @error('trade_comment') is-invalid @enderror" required>出品内容を記入してください</textarea>
{{--        <span class="errorMsg" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--        </span>--}}

        <div class="register_file-wrap">
            <label for="product_image1" class="register_label-file area-drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image1" name="product_image1" value="register_file" class="register_file js-input-file  @error('trade_img1') is-invalid @enderror" required>
                <img src="" alt="" class="prev-img">
            </label>
{{--            <span class="errorMsg" role="alert">--}}
{{--             <strong>{{ $message }}</strong>--}}
{{--            </span>--}}

            <label for="product_image2" class="register_label-file area-drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image2" name="product_image2" value="register_file" class="register_file js-input-file">
            </label>
{{--            <span class="errorMsg" role="alert">--}}
{{--             <strong>{{ $message }}</strong>--}}
{{--            </span>--}}

            <label for="product_image3" class="register_label-file area-drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image3" name="product_image3" value="register_file" class="register_file js-input-file">
            </label>
            {{--            <span class="errorMsg" role="alert">--}}
            {{--             <strong>{{ $message }}</strong>--}}
            {{--            </span>--}}

            <label for="product_image4" class="register_label-file area-drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image4" name="product_image4" value="register_file" class="register_file js-input-file">
            </label>
{{--            <span class="errorMsg" role="alert">--}}
{{--             <strong>{{ $message }}</strong>--}}
{{--            </span>--}}

            <label for="product_image5" class="register_label-file area-drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image5" name="product_image5" value="register_file" class="register_file js-input-file">
            </label>
            {{--            <span class="errorMsg" role="alert">--}}
            {{--             <strong>{{ $message }}</strong>--}}
            {{--            </span>--}}
        </div>

        <input type="hidden" name="users_id" value="{{ $users_id }}">

        <input type="submit" class="register_submit" value="登録">
    </form>
@endsection
@include('layouts.main_menu')

@include('layouts.footer')

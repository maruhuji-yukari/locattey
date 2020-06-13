@extends('layouts.common')

@section('page_title','出品する')

@include('layouts.header')

@include('layouts.menu')

@include('layouts.navi')

@section('section_title','出品する')
@section('main_content')
    <form action="{{ route('register_trade-new') }}" method="POST" class="register_form" enctype="multipart/form-data">
        @csrf
        <label for="product_name" class="register_label">出品タイトル(50文字以上):</label>
        <input type="text" id="product_name" name="product_name" class="register_input @error('product_name') is-invalid @enderror" placeholder="出品タイトル" required value="{{ old('product_name') }}">
        @error('product_name')
        <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="category_id" class="register_label">カテゴリー:</label>
        <select name="category_id" id="category_id" class="register_select @error('category_id') is-invalid @enderror" required>
            <option value="0" readonly>▼選択してください</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
        </select>
        @error('category_id')
        <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="product_describe" class="register_label">概要(500文字以内):</label>
        <textarea name="product_describe" id="product_describe" class="register_textarea @error('product_describe') is-invalid @enderror" required >{{ old('product_describe') }}"</textarea>
        @error('product_describe')
        <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror


        <div class="register_file-wrap">
            <label for="product_image1" class="register_label-file area_drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image1" name="product_image1" value="register_file" class="register_file js-input-file @error('product_image1') is-invalid @enderror" required multiple>
                <img src="" alt="" class="prev-img">
            </label>
            @error('product_image1')
            <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="product_image2" class="register_label-file area_drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image2" name="product_image2" value="register_file" class="register_file js-input-file  @error('product_image2') is-invalid @enderror">
                <img src="" alt="" class="prev-img">
            </label>
            @error('product_image2')
            <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="product_image3" class="register_label-file area_drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image3" name="product_image3" value="register_file" class="register_file js-input-file  @error('product_image3') is-invalid @enderror">
                <img src="" alt="" class="prev-img">
            </label>
            @error('product_image3')
            <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="product_image4" class="register_label-file area_drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image4" name="product_image4" value="register_file" class="register_file js-input-file @error('product_image4') is-invalid @enderror">
                <img src="" alt="" class="prev-img">
            </label>
            @error('product_image4')
            <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="product_image5" class="register_label-file area_drop">
                <span class="register_file-text">ドラッグ&ドロップ</span>
                <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                <input type="file" id="product_image5" name="product_image5" value="register_file" class="register_file js-input-file @error('product_image5') is-invalid @enderror">
                <img src="" alt="" class="prev-img">
            </label>
            @error('product_image5')
            <span class="errorMsg" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <input type="hidden" name="users_id" value="{{ $users_id }}">
        <input type="hidden" name="trade_flag" value="1">
        <input type="submit" class="register_submit" value="登録">
    </form>
@endsection
@include('layouts.main_menu')

@include('layouts.footer')

@section('header')
    <header class="header">
        <div class="titleArea">
            @if(Auth::check())
            <h1 class="header_title"><a href="{{ url('/user/home') }}">Locattey</a></h1>
            @else
                <h1 class="header_title"><a href="{{ url('/') }}">Locattey</a></h1>
                @endif

            <h2 class="header_subtitle">あなたの大切な宝物は誰かにとっても大切な宝物。宝物同士を交換しよう。</h2>
        </div>
        <div class="searchArea">
            <form action="" class="searchArea_form">
                @csrf
                <input type="text" class="searchArea_input" name="search_word"><i class="searchArea_icon fas fa-search"></i>
                <input type="submit" class="searchArea_submit">
            </form>
        </div>
    </header>
@endsection

<!-- フラッシュメッセージ -->
@if (session('flash_message'))
    <div class="alert" role="alert">
        {{ session('flash_message') }}
    </div>
@endif

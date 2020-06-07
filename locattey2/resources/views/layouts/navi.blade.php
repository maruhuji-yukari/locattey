@section('navi')
    <div class="nav-menu js-toggle-sp-menu-target">
        <ul class="nav-menu_list js-toggle-sp-menu-target">
            <li class="nav-menu_item"><a href="{{ route('top') }}" class="nav-menu_link"><span>TOP</span></a></li>
            <li class="nav-menu_item"><a href="news_list.html" class="nav-menu_link"><span>お知らせ</span></a></li>
            <li class="nav-menu_item"><a href="trade_register.html" class="nav-menu_link"><span>出品したい</span></a></li>
            <li class="nav-menu_item"><a href="{{ route('register') }}" class="nav-menu_link"><span>新規登録</span></a></li>
            <li class="nav-menu_item"><a href="{{ route('login') }}" class="nav-menu_link"><span>ログイン</span></a></li>
        </ul>
    </div>
@endsection

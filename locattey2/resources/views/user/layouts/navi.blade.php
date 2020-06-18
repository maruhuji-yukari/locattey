@section('navi')
    <div class="nav-menu js-toggle-sp-menu-target">
        <ul class="nav-menu_list js-toggle-sp-menu-target">
            <li class="nav-menu_item"><a href="{{ url('/user/home') }}" class="nav-menu_link"><span>TOP</span></a></li>
            <li class="nav-menu_item"><a href="news_list.html" class="nav-menu_link"><span>お知らせ</span></a></li>
            @if(Auth::check())
            <li class="nav-menu_item"><a href="{{ route('user/register_trade') }}" class="nav-menu_link"><span>出品したい</span></a></li>
            @else
                <li class="nav-menu_item"><a href="{{ url('/user/login') }}" class="nav-menu_link"><span>出品したい</span></a></li>
            @endif
            @if(Auth::check())
                <li class="nav-menu_item"><a href="{{ route('logout') }}" class="nav-menu_link"><span>ログアウト</span></a></li>
            @else
                <li class="nav-menu_item"><a href="{{ url('/user/login') }}" class="nav-menu_link"><span>ログイン</span></a></li>
            @endif
            @if(Auth::check())
                <li class="nav-menu_item"><span class="user_display">{{Auth::user()->name}}さんが ログイン中</span></li>
            @else
                <li class="nav-menu_item"><a href="{{ url('/user/register') }}" class="nav-menu_link"><span>新規登録</span></a></li>
            @endif
        </ul>
    </div>
@endsection

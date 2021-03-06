@section('main_menu')
        <h3 class="main_menu-title"><i class="far fa-edit"></i> 会員メニュー</h3>
        <div class="menuArea">
            <ul class="menuArea_list">
                @if(Auth::check())
                    <li><a href="{{ route('mypage') }}">マイページトップ</a></li>
                    <li><a href="mypage_info.html">登録情報確認・変更</a></li>
                    <li><a href="trade_list.html">出品履歴一覧</a></li>
                    <li><a href="bid_list.html">引取履歴一覧</a></li>
                    <li><a href="talk_list.html">トーク履歴一覧</a></li>
                    <li><a href="withdrawal.html">退会</a></li>
                @else
                    <li><a href="{{ url('/user/login') }}">閲覧するにはログインしてください</a></li>
                 @endif
            </ul>
        </div>
        <h3 class="main_menu-title"><i class="far fa-edit"></i> その他</h3>
        <div class="menuArea">
            <ul class="menuArea_list">
                <li><a href="news_list.html">お知らせ</a></li>
                <li><a href="aboutsite.html">当サイトについて</a></li>
                <li><a href="faq.html">よくある質問</a></li>
                <li><a href="mailform.html">お問合せ</a></li>
                <li><a href="{{ url('admin/login') }}">管理人メニュー</a></li>
            </ul>
        </div>
@endsection

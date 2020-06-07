<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/092d431054.js" crossorigin="anonymous"></script>
    <title>ログイン | ロケッティ</title>
</head>
<body>

<div class="header">
    <div class="titleArea">
        <h1 class="header_title"><a href="top.html">ロケッティ</a></h1>
        <h2 class="header_subtitle">要らないものをみんなで交換するサイト</h2>
    </div>
    <div class="searchArea">
        <!--        <form action="" class="searchArea_form">-->
        <!--            <input type="text" class="searchArea_input" name="search_word"><i class="searchArea_icon fas fa-search"></i>-->
        <!--            <input type="submit" class="searchArea_submit">-->
        <!--        </form>-->
    </div>
</div>
<div class="menu-trigger js-toggle-sp-menu">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="nav-menu js-toggle-sp-menu-target">
    <ul class="nav-menu_list js-toggle-sp-menu-target">
        <li class="nav-menu_item"><a href="top.html" class="nav-menu_link"><span>TOP</span></a></li>
        <li class="nav-menu_item"><a href="news_list.html" class="nav-menu_link"><span>お知らせ</span></a></li>
        <li class="nav-menu_item"><a href="trade_register.html" class="nav-menu_link"><span>出品したい</span></a></li>
        <li class="nav-menu_item"><a href="register.html" class="nav-menu_link"><span>新規登録</span></a></li>
        <li class="nav-menu_item"><a href="login.html" class="nav-menu_link"><span>ログイン</span></a></li>
    </ul>
</div>
<div class="register">
    <div class="register_content">
        <h3 class="register_title"><i class="fas fa-external-link-alt" aria-hidden="true"></i> ログイン</h3>
        <form action="" method="post" class="register_form">
            <div class="errorMsg">
                <ul>
                    <li>ここにエラーメッセージ表示</li>
                    <li>ここにエラーメッセージ表示</li>
                </ul>
            </div>
            <label for="email" class="register_label">メールアドレス:</label>
            <input type="email" id="email" name="email" class="register_input" placeholder="メールアドレス">

            <label for="password" class="register_label">パスワード(6文字以上):</label>
            <input type="text" id="password" name="password" class="register_input" placeholder="パスワード">

            <input type="submit" class="register_submit" value="ログイン">
        </form>
        <div class="msg_link">
            <ul>
                <li>会員登録がお済みで無い方は<a href="register.html">こちら</a></li>
                <li>パスワードを紛失された方は再発行してください。>><a href="reissue.html">再発行ページ</a>へ</li>
            </ul>
        </div>
    </div>
    <div class="main_menu">
        <h3 class="main_menu-title"><i class="far fa-edit"></i> 会員メニュー</h3>
        <div class="menuArea">
            <ul class="menuArea_list">
                <li><a href="mypage.html">マイページトップ</a></li>
                <li><a href="mypage_info.html">登録情報確認・変更</a></li>
                <li><a href="trade_list.html">出品履歴一覧</a></li>
                <li><a href="bid_list.html">引取履歴一覧</a></li>
                <li><a href="talk_list.html">トーク履歴一覧</a></li>
                <li><a href="withdrawal.html">退会</a></li>
            </ul>
        </div>
        <h3 class="main_menu-title"><i class="far fa-edit"></i> その他</h3>
        <div class="menuArea">
            <ul class="menuArea_list">
                <li><a href="news_list.html">お知らせ</a></li>
                <li><a href="aboutsite.html">当サイトについて</a></li>
                <li><a href="faq.html">よくある質問</a></li>
                <li><a href="mailform.html">お問合せ</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    <p class="footer_text">&copy; ロケッティ All Rights Reserved.</p>
</div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="src/app.js"></script>
</body>
</html>

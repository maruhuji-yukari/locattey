<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('page_title') | Locattey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('./css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/manage.css') }}">

</head>
<body>
<div class="wrap">

    @yield('main')
</div>
</body>
</html>

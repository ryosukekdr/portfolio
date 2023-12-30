<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>旅行好きブログ投稿サイト</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> <!--jQuery-->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}"> <!-- ファビコン -->

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    </head>
    <div id="top"></div>
    <nav class="navbar navbar-expand-md navbar-light header" style ="box-shadow: 0 10px 10px -10px; margin-bottom: 10%; padding-top: 1.3%; padding-bottom: 1.3%;">
        <div style="margin: 0 auto; color: white; font-size: 1.2rem;">旅行好きブログ投稿サイトへようこそ</div>
    </nav>
    @yield('content')
</html>
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
    <body style ="margin-bottom: 5%">
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバー --}}
            <nav class="navbar navbar-expand-md navbar-dark header" style ="box-shadow: 0 10px 10px -10px; margin-bottom: 5%">
                <div></div> <!--ここにdivがないとハンバーガーメニューが左端に来てしまう-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarTogglerDemo2" style="">
                    <!-- ナビバー -->
                    <ul class="navbar-nav" style ="width: 100%;">
                        <li class="header-menu-left underline">
                            <a href="{{ url('/') }}">ユーザー一覧</a>
                        </li>
                        <li class="header-menu-left underline">
                            @yield('home-link')
                        </li>
                        <li class="header-menu-left underline">
                            @yield('blog-index')
                        </li>
                        <li class="header-menu-left underline">
                            <a href="{{ route('itemlist_index') }}">私の持ち物リスト</a>
                        </li>
                        @guest
                        @else
                        <li class="dropdown hamburger-inside">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('mypage') }}">マイページ</a>
                                <a class="dropdown-item" href="{{ route('admin.blog.index') }}">ブログ編集</a>
                                <a class="dropdown-item" href="{{ route('admin.user.show') }}">アカウント設定</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('messages.logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>@endguest
                    </ul>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}
            @yield('content')
        </div>
    </body>
</html>
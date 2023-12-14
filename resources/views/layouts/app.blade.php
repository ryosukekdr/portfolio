<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>旅行好きブログ投稿サイト</title>
        <meta name="discription" content="旅行好きブログ投稿サイト介">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">  <!--リセットCSS読み込み-->
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">  <!--webfontのFont Awesomeを使う-->
        <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> <!--jQuery-->
        <script src="https://www.gstatic.com/charts/loader.js"></script> <!--geocharts-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> <!--Vue.js-->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!--世界のあいさつAPI-->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <div id="top"></div>
    <nav class="navbar navbar-expand-md navbar-light header" style ="box-shadow: 0 10px 10px -10px;">
        <div></div> <!--ここにdivがないとハンバーガーメニューが左端に来てしまう-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse hamburger-inside" id="navbarTogglerDemo2" style="">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto" style="width: 50%">
                <li class="header-menu-left">
                    <a href="{{ url('/') }}">ユーザー一覧</a>
                </li>
                <li class="header-menu-left">
                   <a href="{{ url('/userpage') }}">ホーム</a>
                </li>
                <li class="header-menu-left">
                   <a href="{{ route('blog') }}">ブログ閲覧</a>
                </li>
                <li class="header-menu-left">
                   <a href="{{ route('itemlist_index') }}">私の持ち物リスト</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @if (Request::routeIs('mypage'))
                    <li class="header-menu-right">
                        <a href="{{ route('admin.blog.index') }}">ブログ編集</a>
                    </li>
                    <li class="header-menu-right">
                        <a href="{{ route('admin.user.show') }}">アカウント設定</a>
                    </li>
                @endif
                @guest
                @else
                    <li class="header-menu-right">
                      <a href="{{ route('mypage') }}">マイページ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('messages.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    
    @yield('content')
    
    <a href="#top"><img alt="ページトップへのリンク" src="{{ secure_asset('toppage.png') }}"  class="toppage-icon"></a>
    
    <footer>
        <p><small>&copy;2023 Ryosuke</small></p>
    </footer>
</html>
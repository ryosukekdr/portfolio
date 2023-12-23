<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>旅行好きブログ投稿サイト</title>
        <meta name="discription" content="旅行好きブログ投稿サイト">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">  <!--リセットCSS読み込み-->
        <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">  <!--webfontのFont Awesomeを使う-->
        <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}"> <!-- ファビコン -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> <!--jQuery-->
        <script src="https://www.gstatic.com/charts/loader.js"></script> <!--geocharts-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> <!--Vue.js-->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!--世界のあいさつAPI-->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <div id="top"></div>
    {{-- 画面上部に表示するナビゲーションバー --}}
    <nav class="navbar navbar-expand-md navbar-dark header" style ="box-shadow: 0 10px 10px -10px;">
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
                    @yield('itemlist-index')
                </li>
                <li style="margin: 1% 0 1% auto; color: white;">
                    @yield('username')
                </li>
                <li class="dropdown hamburger-inside" style="margin-left: 3%">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('mypage') }}">マイページ</a>
                        <a class="dropdown-item" href="{{ route('admin.blog.index') }}">ブログ編集</a>
                        <a class="dropdown-item" href="{{ route('admin.itemlist.index') }}">持ち物リスト編集</a>
                        <a class="dropdown-item" href="{{ route('admin.user.show') }}">アカウント設定</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('messages.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    @yield('content')
    
    <a href="#top"><img alt="ページトップへのリンク" src="{{ secure_asset('toppage.png') }}"  class="toppage-icon"></a>
    
    <footer>
        <p><small>&copy;2023 Ryosuke</small></p>
    </footer>
</html>
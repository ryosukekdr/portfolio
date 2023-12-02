<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>旅行好きブログ投稿サイト</title>
    <meta name="discription" content="旅行の記録、役立ち情報をご紹介">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <!--<div id="app">-->
    <nav class="navbar navbar-expand-md navbar-light header">
        <!--<div class="container-fluid">-->
            <div></div> <!--ここにdivがないとハンバーガーメニューが左端に来てしまう-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!--<div class="container">-->
                <!--
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    
                    <!-- Left Side Of Navbar -->
                <div class="navbar-collapse collapse hamburger-inside" id="navbarTogglerDemo2" style="">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item header-menu">
                            <a href="{{ url('/') }}">ホーム</a>
                        </li>
                        <li class="nav-item header-menu">
                            <a href="{{ route('blog') }}">ブログ閲覧</a>
                        </li>
                        <li class="nav-item header-menu">
                            <a href="{{ route('itemlist_index') }}">持ち物リスト</a>
                        </li>
                        
                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        <!--@guest
                            @if (Route::has('login'))
                                <li class="nav-item margin-0-auto">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item margin-0-auto">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown margin-0-auto">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest-->
                    </ul>
                    
                <!--</div>-->
            <!--</div>-->
                      <!-- <a href="https://www.facebook.com/kodera.ryosuke" class="text-align-right"><img alt="Facebook" src="{{ secure_asset('facebook.png') }}"  class="facebook-icon"></a>-->
       <a href="{{ route('admin.blog.index') }}">ブログ編集</a>
       <a href="{{ route('admin.user.show') }}">アカウント設定</a>
      
                    
                </div>
        <!--</div>-->
    </nav>
        @yield('content')
    <a href="#top"><img alt="ページトップへのリンク" src="{{ secure_asset('toppage.png') }}"  class="toppage-icon"></a>
    <footer>
        <!--<div class="wrapper">-->
        <p><small>&copy;2023 Ryosuke</small></p>
        <!--</div>-->
    </footer>
    <!--</div>-->
</html>
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
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">  <!--リセットCSS読み込み-->
        <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">  <!--webfontのFont Awesomeを使う-->
        <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}">
    </head>

    <div id="top"></div>
    <nav class="navbar navbar-expand-md navbar-light header" style ="box-shadow: 0 10px 10px -10px;">
        <div></div> <!--ここにdivがないとハンバーガーメニューが左端に来てしまう-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Left Side Of Navbar -->
        <div class="navbar-collapse collapse hamburger-inside" id="navbarTogglerDemo2" style="">
            <ul class="navbar-nav me-auto" style="width: 50%; color: white;">
                <li class="header-menu-left">
                    <div style="justify-content: space-between;">旅行好きブログ投稿サイトへようこそ</div>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul>
                <li class="header-menu-right">
                    <a href="{{ route('mypage') }}" style="white-space: nowrap;">マイページ</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
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
            </ul>
        </div>
    </nav>
    <div style="width: 50%; margin: 10% auto;">
        <ul class="user-list">
            @foreach ($users as $user)
                <li class="fas fa-plane">
                    <a href="{{ route('userpage', ['user_id' => $user->id]) }}">{{ $user->name }}</a>
                    <h style="margin-left: 30%">訪問国数：{{$user->CountryCount()}}ヵ国</h>
                </li>
                <br><br>
            @endforeach
        </ul>
    </div>
</html>
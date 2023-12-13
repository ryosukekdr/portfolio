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
<nav class="navbar navbar-expand-md navbar-light header" style ="box-shadow: 0 10px 10px -10px;">
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
        <ul class="navbar-nav me-auto" style="width: 50%; color: white;">
            <li class="header-menu-left">
                <div style="justify-content: space-between;">旅行好きブログ投稿サイトへようこそ</div>
            </li>
        </ul>
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
       
       
       
                    
    </div>
</nav>

<div style="width: 50%; margin: 0 auto;">
<ul class="user-list">
    
@foreach ($users as $user)
   <li class="fas fa-plane"><a href="{{ route('userpage', ['user_id' => $user->id]) }}">{{ $user->name }}</a></li>
                                <br>
                            @endforeach
                            
                            
                            </ul>
                            </div>
                         </html>
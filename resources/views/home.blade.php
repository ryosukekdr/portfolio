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
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body style ="background:white">
        <nav class="navbar navbar-expand-md navbar-light header" style ="box-shadow: 0 10px 10px -10px; padding-top: 1%; padding-bottom: 1%;">
            <div style="margin: 0 auto; color: white; font-size: 1.2rem;">旅行好きブログ投稿サイトへようこそ</div>
            <!-- ナビバー右サイド -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
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
        </nav>
        <div class="user-list-box">
            <span class="user-list-title">ユーザ一覧</span>
            <ul class="user-list">
                @foreach ($users as $user)
                    @if(!(\Auth::user()->id == $user->id))
                        <div class="display-flex-space-between">
                            <div class="fas fa-plane">
                                <a href="{{ route('userpage', ['user_id' => $user->id]) }}">{{ $user->name }}</a>
                            </div>
                            <h>訪問国数：{{$user->CountryCount()}}ヵ国</h>
                        </div>
                        <br><br>
                    @continue
                    @endif
                @endforeach
            </ul>
        </div>
    </body>
</html>
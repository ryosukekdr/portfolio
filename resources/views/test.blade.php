<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>地球を散歩する♪</title>
    <meta name="discription" content="旅行の記録、役立ち情報をご紹介">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">  <!--リセットCSS読み込み-->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">  <!--webfontのFont Awesomeを使う-->
    <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<div class="" id="loading"><img alt="" src="{{ secure_asset('spin.png') }}" class=""></div>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
<img class="motion-image" style="width: 20%;" src="{{ secure_asset('toppage.png') }}"><br><br><br><br><br>
</html>
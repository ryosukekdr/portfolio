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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="{{ secure_asset('chikyu.png') }}">

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container-fluid">
<div class="row">
  <div class="col-md-4 ssss"><img src="{{ secure_asset('ogasawara2.jpg') }}" alt="背景画像"></div>
  <div class="col-md-4">col-sm-5</div>
  <div class="col-md-4">col-sm-4</div>
</div>
</div>

</html>

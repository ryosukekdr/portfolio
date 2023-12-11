@extends('layouts.app')

@section('content')
<script src="{{ mix('js/loading.js') }}" defer></script>

<div id="loading">
    <img class="spin" src="{{ secure_asset('spin.png') }}">
    <div id="loading-screen"></div>
</div>
<div class="row" style="width: 100%;">
    <article class="col-md-9">
    @if (Request::routeIs('userpage'))
        @if ($user->cover_photo != NULL)
            <img src="{{ secure_asset('storage/image/' . $user->cover_photo) }}" class="wall" alt="カバー写真">
        @else
            <img src="{{ secure_asset('cover_photo.png') }}" style="width: 70%;" alt="カバー写真">
        @endif
    @else
        @if (\Auth::user()->cover_photo != NULL)
        <a href="{{ route('admin.user.cover_photo.add') }}">
            <div class="wall">
                <img src="{{ secure_asset('storage/image/' . \Auth::user()->cover_photo) }}" style="width: 100%;" alt="カバー写真">
                <div class="mask">
                    <div class="caption">カバー写真の編集</div>
                </div>
            </div>
        </a>
        @else
            <div class="wall-box"><a href="{{ route('admin.user.cover_photo.add') }}"><div style="text-align: center;">背景画像を設定できます</div></a></div>
        @endif
    @endif
        <div class="margin-side3">
        <i class="fas fa-plane-departure"> 行った国</i>
        <p>オーストラリア、アメリカ（ハワイ、グアム、サイパン、ニューヨーク、シカゴ）、フィリピン（セブ島）、タイ（プーケット、バンコク、チェンマイ）
            トルコ、ギリシャ、韓国、台湾、カナダ（ナイアガラ）、ベトナム、カンボジア、香港、マカオ、インドネシア（バリ島）
            マレーシア、ミャンマー、イギリス、フランス、イタリア、バチカン市国、中国（上海）
            ラオス、インド、シンガポール、スリランカ
        </p>
        <i class="fas fa-plane-departure"> 行きたい国</i>
        <p>イスラエル、ヨルダン、クロアチア、マルタ、エジプト、モロッコ、ウズベキスタン、アゼルバイジャン、ジョージア、
            イラン、サウジアラビア、ネパール、ブータン、グランドキャニオン
        </p>
        </div>
    </article>
    <aside class="col-md-3">
        <br>
        <i class="fas fa-user-circle profile"> プロフィール</i>
        <div class="text-align-center"><img alt="プロフィール画像" src="{{ secure_asset('profile.jpg') }}" class="profile-icon"></div>
        <div class="margin-top3">
            旅行好きの普通の会社員です。<br>
            バックエンドエンジニアへのキャリアチェンジを目指してPHPを勉強中。
        </div>
    </aside>
</div>

@endsection

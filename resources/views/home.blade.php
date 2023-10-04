@extends('layouts.app')

@section('content')
<script src="{{ mix('js/loading.js') }}" defer></script>

<div id="loading">
    <img class="spin" src="{{ secure_asset('spin.png') }}">
    <div id="loading-screen"></div>
</div>
<div class="row" style="width: 100%;">
    <article class="col-md-9">
        <img class="wall" src="{{ secure_asset('ogasawara2.jpg') }}" alt="背景画像">
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
        <i class="fas fa-user-circle profile"> プロフィール</i>
        <div class="text-align-center"><img alt="プロフィール画像" src="{{ secure_asset('profile.jpg') }}" class="profile-icon"></div>
        <div class="margin-top3">
            旅行好きの普通の会社員です。<br>
            バックエンドエンジニアへのキャリアチェンジを目指してPHPを勉強中。
        </div>
    </aside>
</div>

@endsection

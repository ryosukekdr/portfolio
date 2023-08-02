@extends('layouts.app')

@section('content')
<div class="container-fluid main">
    <div class="row">
    <article class="col-md-9">
        <img class="wall" src="{{ secure_asset('ogasawara2.jpg') }}" alt="背景画像">
        <p>行ったことある国：</P>
        <p>オーストラリア、アメリカ（ハワイ、グアム、サイパン、ニューヨーク、シカゴ）、フィリピン（セブ島）、タイ（プーケット、バンコク、チェンマイ）
        トルコ、ギリシャ、韓国、台湾、カナダ（ナイアガラ）、ベトナム、カンボジア、香港、マカオ、インドネシア（バリ島）
        マレーシア、ミャンマー、イギリス、フランス、イタリア、バチカン市国、中国（上海）
        ラオス、インド、シンガポール、スリランカ
        </p>

        <p>行きたい国：</p>
        <p>イスラエル、ヨルダン、クロアチア、マルタ、エジプト、モロッコ、ウズベキスタン、アゼルバイジャン、ジョージア、
        イラン、サウジアラビア、ネパール、ブータン、グランドキャニオン
        </p>
    </article>
    <aside class="col-md-3">
        <li class="profile">プロフィール</li>
        <img alt="プロフィール画像" src="{{ secure_asset('profile.jpg') }}">
     
    </aside>
    </div>
</div>
@endsection

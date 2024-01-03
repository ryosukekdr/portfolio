@extends('layouts.app')

@if (\Auth::user()->id == $user_id)
    @section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
    @section('username')自分のページ@endsection
@else
    @section('home-link')<a href="{{ route('userpage', ['user_id' => $user_id]) }}">ホーム</a>@endsection
    @section('username'){{DB::table('users')->find($user_id)->name}}さんのページ@endsection
@endif

@section('blog-index')<a href="{{ route('blog', ['user_id' => $user_id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => $user_id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    {{--ajaxによる非同期通信いいね--}}
    <script src="{{ mix('js/like.js') }}" defer></script>
    <body style ="background:white">
        <div style="background-color: white;">
            {{--世界地図表示--}}
            <div id="regions_div" class="mx-auto" style="width: 90%; box-sizing: border-box;"></div>
            <div class="margin-top3 text-align-center">
                @if (Request::routeIs('blog.search'))
                    @if (!($blogs->isEmpty()))
                        <h class="head-border">
                            {{$selected_country->name}}が
                            <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
                            タグ付けされているブログを表示中
                        </h>
                    @else
                        <h class="head-border">
                            {{$selected_country->name}}が
                            <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
                            タグ付けされているブログはありません
                        </h>
                    @endif
                    <div class="" style="justify-content:space-between; margin-top:1%">
                        <div style="margin-bottom: 3%">
                            <a href="{{ route('blog', ['user_id' => $user_id]) }}">
                                すべてのブログを表示
                            </a>
                        </div>
                        <img src="" id="flag" class="responsive-flag">
                    </div>
                    <div id="english_name"></div>
                    <p id="salut" style="font-size: 1.5rem; margin-top: 3%;"></p>
                @else
                    <h class="head-border">すべてのブログを表示中</h>
                @endif
            </div>
            {{--geochartのAPIで世界地図読み込み--}}
            <script>
                google.charts.load('current', {
                    'packages':['geochart'],
                    'mapsApiKey': '国コードをカスタマイズする場合はAPIキーを入れる'
                });
                google.charts.setOnLoadCallback(drawRegionsMap);
                // 世界地図がクリックされたら、国名コードをGETパラメータにして記事一覧ページへ送る
                function selectHandler(reg) {
                    window.location.href = '/blog/search?user_id={{$user_id}}&country_code=' + reg.region;
                }
                function drawRegionsMap() {
                    const country_codes = @json($country_codes); // 国名コードと国名の配列をBlogControllerから受け取る。
                    const data = google.visualization.arrayToDataTable(country_codes);
                    const options = {defaultColor:'#FF8C00'};
                    const chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
                    google.visualization.events.addListener(chart, 'regionClick', selectHandler);
                    chart.draw(data, options);
                }
            </script>
            {{--世界地図がクリックされたらAPIで世界のあいさつの読み込み--}}
            <script>
                const searchparams = new URLSearchParams(window.location.search);
                const country_code = searchparams.get('country_code');
                $.ajax({
                    type: 'GET',
                    data: {cc:country_code},
                    url: "https://hellosalut.stefanbohacek.dev",
                    //url: "https://hellosalut.stefanbohacek.dev/?cc=" + country_code,
                    dataType: 'json',
                })
                .done(
                    function (jsonData) {
                        const salut = jsonData.hello;
                        const country_name = @json($selected_country->name);
                        if (salut =='') {
                            $('#salut').html('');
                        } else {
                            $('#salut').html(country_name + 'のあいさつ：　' + salut);
                        }
                    }
                );
            </script>
            <!--世界地図がクリックされたらAPIで国旗の読み込み-->
            <script>
                const settings = {
	                async: true,
	                crossDomain: true,
	                url: 'https://rest-countries10.p.rapidapi.com/country/' + @json($selected_country->english_name),
	                type: 'GET',
    	            headers: {
	    	            'X-RapidAPI-Key': '61a635900bmshb0c147b7bcd9251p1969c1jsn1fd32e2a6ad9',
	    	            'X-RapidAPI-Host': 'rest-countries10.p.rapidapi.com'
	                }
                };
                $.ajax(settings).done(function (response) {
    	            $('#english_name').html(response[0].name.shortname);
	                $("#flag").attr("src",response[0].flag.officialflag.svg);
                });
            </script>
            <div class="row row-cols-md-2">
                @foreach($blogs as $blog)
                    <div>   {{--このdivがないと横並びのblog2つがくっついてしまう--}}
                        <div class="blog-card">
                            @if (!($blog->images->isEmpty()))  {{--画像がある場合に１枚目だけを表示させるための処理。なぜか$blog->images != NULLだとエラー。たぶんimagesがコレクションのため--}}
                                @php $image = $blog->images->first() @endphp  {{--@phpで囲わないとコードがview画面に出てしまう--}}
                                {{--{{dd($image->image_path)}};--}}
                                <img src="{{ secure_asset('storage/image/' . $image->image_path) }}" class="card-img-top" alt="写真">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('blog_detail', ['id' => $blog->id, 'user_id' => $user_id]) }}">
                                        {{ Str::limit($blog->title, 50) }}
                                    </a>
                                </h5>
                                <i class="fas fa-plane" style="color: gray;"></i> 
                                {{ date('Y/m/d', strtotime($blog->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog->arrival_date)) }}
                                <br>
                                <p class="card-text margin-top3">
                                    {{ Str::limit($blog->body, 200) }}
                                </p>
                            </div>
                            <br>
                            <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
                            @foreach ($blog->countries as $country)
                                {{ $country->name }}{{'　'}}
                            @endforeach
                            <div class=footer>
                                <i class="fas fa-edit" style="color: gray;"> {{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                                <i class="far fa-eye margin-left-4" style="color: gray;"> {{ $blog->view_count }}</i>
                            </div>
                            <!-- 以下はいいねボタン表示 -->
                            @auth
                                {{--ユーザがまだいいねを押していなかったら--}}
                                @if (!$blog->isLikedBy(Auth::user()))
                                    <span class="likes">
                                        <i class="far fa-thumbs-up like-toggle margin-top5" data-blog_id="{{ $blog->id }}" style="cursor: pointer;"></i>
                                        <span class="like-counter">{{$blog->likes_count}}</span>
                                    </span>
                                {{--ユーザがすでにいいねを押していたら--}}
                                @else
                                    <span class="likes">
                                        <i class="far fas fa-thumbs-up like-toggle liked margin-top5" data-blog_id="{{ $blog->id }}" style="cursor: pointer;"></i>
                                        <span class="like-counter">{{$blog->likes_count}}</span>
                                    </span>
                                @endif
                            @endauth
                            @guest
                                <span class="likes">
                                    <i class="far fa-thumbs-up"></i>
                                    <span class="like-counter">{{$blog->likes_count}}</span>
                                </span>
                            @endguest
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection



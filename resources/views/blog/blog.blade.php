@extends('layouts.app')

@section('content')
<div id="regions_div" class="mx-auto" style="width: 900px; height: 500px;"></div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {
        'packages':[
            'geochart'
        ],
        'mapsApiKey': 'ここにAPIキーをいれてね'
    });

    google.charts.setOnLoadCallback(drawRegionsMap);

    // 国がクリックされたら、国名コードをGETパラメータにして記事一覧ページへ送る
    function selectHandler(reg) {
        window.location.href = '/search?country_code=' + reg.region;
    }
    
    function drawRegionsMap() {
        // 国名コードと国名の配列をBlogControllerから受け取る。
        const codes = @json($codes);
        
        const data = google.visualization.arrayToDataTable(codes);
        const options = {
            defaultColor:'#FF8C00',
        };
        const chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        google.visualization.events.addListener(chart, 'regionClick', selectHandler);
        chart.draw(data, options);
    }
</script>



<div class="row row-cols-sm-2">
    @foreach($blogs as $blog)
        <div>   {{--このdivがないとなぜが横並びのblog２つがくっついてしまう--}}
            <div class="blog-card">
                @if (!($blog->images->isEmpty()))  {{--画像がある場合に１枚目だけを表示させるための処理。なぜか$blog->images != NULLだとエラー。たぶんimagesがコレクションのため--}}
                    @php $image = $blog->images->first() @endphp  {{--@phpで囲わないとコードがview画面に出てしまう--}}
                    {{--{{dd($image->image_path)}};--}}
                    <img src="{{ secure_asset('storage/image/' . $image->image_path) }}" class="card-img-top" alt="写真">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog_detail', ['id' => $blog->id]) }}">{{ Str::limit($blog->title, 50) }}</a></h5>
                    <p class="card-text">{{ Str::limit($blog->body, 200) }}</p>
                </div>
                <div class=footer>
                    <i class="fas fa-edit">{{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                    <i class="far fa-eye margin-left-4">{{ $blog->view_count }}</i>
                </div>
            </div>
        </div>
   @endforeach
</div>
@endsection



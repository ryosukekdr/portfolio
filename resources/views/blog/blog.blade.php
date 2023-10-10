@extends('layouts.app')

@section('content')
<div style="background-color: white;">
<div id="regions_div" class="mx-auto" style="width: 900px; height: 500px;"></div>
<div class="margin-top3 text-align-center">
    @if (Request::routeIs('blog.search'))
        <h class="head-border">{{$selected_country->name}}が <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>タグ付けされているブログを表示中</h>
        <div class="margin-top3 text-align-right" style="margin-right: 3%;"><a href="{{ route('blog') }}">すべてのブログを表示</a></div>
        <div id="app"><p id="salut" v-on="getSalut" style="font-size: 1.5rem;"></p></div>
    @else
    <h class="head-border">すべてのブログを表示中</h>
    @endif
</div>

<script src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue2.6.10/dist/vue.js"></script>
<!--世界のあいさつAPI-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
<script>
    google.charts.load('current', {
        'packages':[
            'geochart'
        ],
        'mapsApiKey': 'ここにAPIキーをいれてね'
    });

    google.charts.setOnLoadCallback(drawRegionsMap);

    // 世界地図がクリックされたら、国名コードをGETパラメータにして記事一覧ページへ送る
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

<script>
    let app = new Vue({
  el: "#app",
  data: {
    salut: ""
  },
  computed: {
    getSalut: async function () {
      //世界地図がクリックされたときの国コードをクエリから取得
      const searchparams = new URLSearchParams(window.location.search);
      country_code = searchparams.get('country_code');
      //取得した国コードをHelloSalut APIに送る
      let HelloSalutUrl = "https://hellosalut.stefanbohacek.dev/?cc=" + country_code;
      await axios
        // HelloSalut API呼び出し
        .get(HelloSalutUrl)
        .then(function (response) {
          return response["data"];
        })
        .then(function (jsonData) {
          this.salut = jsonData["hello"];
          const country_name = @json($selected_country->name);
          document.getElementById("salut").innerHTML = country_name + 'のあいさつ：　' + `${this.salut}`;
        });
    }
  }
});
</script>

{{--
<script>
    $(function () {
        const searchparams = new URLSearchParams(window.location.search);
        const country_code = searchparams.get('country_code');
      $.ajax({
          type: 'GET',
          //data: param,
          url: "https://hellosalut.stefanbohacek.dev/?cc=" + country_code,
          dataType: 'json',
      })
      .done(function(response) {
        //function (response) {
        return response["data"];
        //}
        //function (jsonData) {
          const salut = jsonData["hello"];
          const country_name = @json($selected_country->name);
          //console.log(country_name);
          document.getElementById("salut").innerHTML = country_name + 'のあいさつ：　' + salut;
        //}
          
      });
    });
</script>
--}}

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
                    <i class="fas fa-plane" style="color: gray;"></i> {{ date('Y/m/d', strtotime($blog->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog->arrival_date)) }}<br>
                    <p class="card-text margin-top3">{{ Str::limit($blog->body, 200) }}</p>
                </div><br>
                <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
                    @foreach ($blog->countries as $country)
                        {{ $country->name }}{{'　'}}
                    @endforeach
                
                <div class=footer>
                    <i class="fas fa-edit" style="color: gray;"> {{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                    <i class="far fa-eye margin-left-4" style="color: gray;"> {{ $blog->view_count }}</i>
                </div>
            </div>
        </div>
   @endforeach
</div>
</div>
@endsection



@extends('layouts.app')

@section('content')
<div id="regions_div" class="mx-auto" style="width: 900px; height: 500px;"></div>
<div id="app"><p id="salut" v-on:load="getSalut"></p></div>

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




 
  <script>
    let app = new Vue({
  el: "#app",
  data: {
    nation: "",
    salut: ""
  },
  computed: {
    getSalut: async function () {
      //let lang_code = this.nation.split("：")[0];
      const searchparams = new URLSearchParams(window.location.search);
      country_code = searchparams.get('country_code');
      let HelloSalutUrl = "https://hellosalut.stefanbohacek.dev/?cc=" + country_code;
      await axios
        // HelloSalut API呼び出し
        .get(HelloSalutUrl)
        .then(function (response) {
          return response["data"];
        })
        .then(function (jsonData) {
          this.salut = jsonData["hello"];
          document.getElementById("salut").innerHTML = `${this.salut}`;
          //readAloud(decNumRefToString(this.salut), lang_code);
        });
    }
  }
});
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
                <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
                    @foreach ($blog->countries as $country)
                        {{ $country->name }}{{'　'}}
                    @endforeach
                
                <div class=footer>
                    <i class="fas fa-edit">{{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                    <i class="far fa-eye margin-left-4">{{ $blog->view_count }}</i>
                </div>
            </div>
        </div>
   @endforeach
</div>
@endsection



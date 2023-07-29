@extends('layouts.app')

@section('content')
<div class="row row-cols-sm-2">
    @foreach($posts as $post)
        <div>   {{--このdivがないとなぜが横並びのblog２つがくっついてしまう--}}
            <div class="blog-card">
                @if ($post->images->first() != NULL)  {{--画像がある場合に１枚目だけを表示させるための処理。なぜか$post->images != NULLだとエラー--}}
                    @php $image = $post->images->first() @endphp  {{--@phpで囲わないとコードがview画面に出てしまう--}}
                    {{--{{dd($image->image_path)}};--}}
                    <img src="{{ secure_asset('storage/image/' . $image->image_path) }}" class="card-img-top" alt="写真">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog_id', ['id' => $post->id]) }}">{{ Str::limit($post->title, 50) }}</a></h5>
                    <p class="card-text">{{ Str::limit($post->body, 200) }}</p>
                </div>
                <div class=footer>
                    <div class="date">{{ date('Y年m月d日', strtotime($post->edited_at)) }}</div>
                    <div class="etsuran">{{ $post->view_count }}</div>
                </div>
            </div>
        </div>
   @endforeach
</div>
@endsection



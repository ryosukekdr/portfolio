@extends('layouts.app')

@section('content')
<div class="row row-cols-sm-2">
    @foreach($posts as $post)
        <div>   {{--このdivがないとなぜが横並びのblog２つがくっついてしまう--}}
            <div class="blog-card">
                @if (!($post->images->isEmpty()))  {{--画像がある場合に１枚目だけを表示させるための処理。なぜか$post->images != NULLだとエラー。たぶんimagesがコレクションのため--}}
                    @php $image = $post->images->first() @endphp  {{--@phpで囲わないとコードがview画面に出てしまう--}}
                    {{--{{dd($image->image_path)}};--}}
                    <img src="{{ secure_asset('storage/image/' . $image->image_path) }}" class="card-img-top" alt="写真">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog_id', ['id' => $post->id]) }}">{{ Str::limit($post->title, 50) }}</a></h5>
                    <p class="card-text">{{ Str::limit($post->body, 200) }}</p>
                </div>
                <div class=footer>
                    <i class="fas fa-edit">{{ date('Y年m月d日', strtotime($post->created_at)) }}</i>
                    <i class="far fa-eye margin-left-4">{{ $post->view_count }}</i>
                </div>
            </div>
        </div>
   @endforeach
</div>
@endsection



@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="blog-detail-card">
            <h1 class="detail-title">{{ $post->title }}</h1>
            <div class="row text-align-right">
                        <div class="kaigyo col-md-6">
                                    {{ $post->body }}
                        </div>
                        <div class="detail-image col-md-6">
                                @if (!($post->images->isEmpty()))  {{--hasmanyリレーションで$postが複数持ってる画像を１枚ずつ表示。$post->images != NULLだと画像無くてもif文通過してしまう。imagesがコレクションのため--}}
                                    <div class="text-align-center">
                                        <br>
                                        @foreach ($post->images as $image)
                                            <img src="{{ secure_asset('storage/image/' . $image->image_path) }}">
                                            <br>
                                        @endforeach
                                    </div>
                                @endif
                        </div>
            </div>
            <div class=detail-footer>
                <i class="fas fa-edit">{{ date('Y年m月d日', strtotime($post->created_at)) }}</i>
                <i class="fas fa-redo-alt margin-left-4">{{ date('Y年m月d日', strtotime($post->edited_at)) }}</i>
                <i class="far fa-eye margin-left-4">{{ $post->view_count }}</i>
            </div>
        </div>
    </div>
@endsection  {{--endsectionを消すとナビバーがmainの下に来てしまう--}}
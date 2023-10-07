@extends('layouts.app')

@section('content')
<script src="{{ mix('js/animation.js') }}" defer></script>

    <div class="main">
        <div class="blog-detail-card responsive-width">
            <h1 class="detail-title">{{ $blog->title }}</h1>
            <div class="row text-align-right">
                <div class="kaigyo col-md-6">
                    {{ $blog->body }} 
                    @foreach ($blog->countries as $country)
                                    <li>{{ $country->name }}</li>
                                @endforeach
                </div>
                <div class="detail-image col-md-6">
                    @if (!($blog->images->isEmpty()))  {{--hasmanyリレーションで$blogが複数持ってる画像を１枚ずつ表示。$blog->images != NULLだと画像無くてもif文通過してしまう。imagesがコレクションのため--}}
                        <div class="text-align-center">
                            <br>
                            @foreach ($blog->images as $image)
                                <img class="motion-image" src="{{ secure_asset('storage/image/' . $image->image_path) }}">
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class=detail-footer>
                <i class="fas fa-edit">{{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                <i class="fas fa-redo-alt margin-left-4">{{ date('Y年m月d日', strtotime($blog->edited_at)) }}</i>
                <i class="far fa-eye margin-left-4">{{ $blog->view_count }}</i>
            </div>
        </div>
    </div>
@endsection  {{--endsectionを消すとナビバーがmainの下に来てしまう--}}
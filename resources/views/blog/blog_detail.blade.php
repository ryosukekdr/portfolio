@extends('layouts.app')

@section('content')
    {{--画像のフェードインアニメーション--}}
    <script src="{{ mix('js/animation.js') }}" defer></script>
    {{--ajaxによる非同期通信いいね--}}
    <script src="{{ mix('js/like.js') }}" defer></script>

    <div class="main">
        <div class="blog-detail-card responsive-width">
            <h1 class="detail-title">{{ $blog->title }}</h1>
            <i class="fas fa-plane" style="color: gray;"></i> {{ date('Y/m/d', strtotime($blog->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog->arrival_date)) }}<br>
            <div class="row text-align-right">
                <div class="kaigyo col-md-6">
                    {{ $blog->body }} 
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
        
            <i class="fas fa-map-marker-alt" style="color: #66CCFF;"></i>
            @foreach ($blog->countries as $country)
                {{ $country->name }}{{'　'}}
            @endforeach
            <div class=detail-footer>
                <i class="fas fa-edit" style="color: gray;"> {{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                <i class="fas fa-redo-alt margin-left-4" style="color: gray;"> {{ date('Y年m月d日', strtotime($blog->edited_at)) }}</i>
                <i class="far fa-eye margin-left-4" style="color: gray;"> {{ $blog->view_count }}</i>
            </div>
            <br>
            <!-- 以下はいいねボタン表示 -->
            @auth
                {{--ユーザがまだいいねを押していなかったら--}}
                @if (!$blog->isLikedBy(Auth::user()))
                    <span class="likes">
                        <i class="far fa-thumbs-up like-toggle" data-blog_id="{{ $blog->id }}" style="cursor: pointer;"></i>
                        <span class="like-counter">{{$blog->likes_count}}</span>
                    </span>
                {{--ユーザがすでにいいねを押していたら--}}
                @else
                    <span class="likes">
                        <i class="far fas fa-thumbs-up like-toggle liked" data-blog_id="{{ $blog->id }}" style="cursor: pointer;"></i>
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
@endsection  {{--endsectionを消すとナビバーがmainの下に来てしまう--}}
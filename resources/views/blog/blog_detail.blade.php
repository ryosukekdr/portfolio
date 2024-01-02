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
    {{--画像のフェードインアニメーション--}}
    <script src="{{ mix('js/animation.js') }}" defer></script>
    {{--ajaxによる非同期通信いいね--}}
    <script src="{{ mix('js/like.js') }}" defer></script>

    <div class="main">
        <div class="blog-detail-card responsive-width">
            <h1 class="detail-title">{{ $blog->title }}</h1>
            <i class="fas fa-plane" style="color: gray;"></i> {{ date('Y/m/d', strtotime($blog->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog->arrival_date)) }}<br>
            <div class="row text-align-right">
                <div class="detail-body col-md-6">
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
            <div class="detail-footer">
                <i class="fas fa-edit"> {{ date('Y年m月d日', strtotime($blog->created_at)) }}</i>
                <br>
                <i class="fas fa-redo-alt side"> {{ date('Y年m月d日', strtotime($blog->edited_at)) }}</i>
                <br>
                <i class="far fa-eye side"> {{ $blog->view_count }}</i>
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
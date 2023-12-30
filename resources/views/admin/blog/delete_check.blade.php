@extends('layouts.admin')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $blog_form->title }}</div>
                <div class="post">
                    <div class="row" style ="padding-left: 2%; padding-bottom: 2%;">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ date('Y/m/d', strtotime($blog_form->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog_form->arrival_date)) }}
                            </div>
                            <div class="body mt-3">
                                {{ $blog_form->body }}
                            </div>
                        </div>
                        <div class="col-md-6 text-right mt-4">
                            @if (!($blog_form->images->isEmpty()))  {{--hasmanyリレーションで$blogが複数持ってる画像を１枚ずつ表示。$blog->images != NULLだと画像無くてもif文通過してしまう。imagesがコレクションのため--}}
                                <div class="text-align-center">
                                    <br>
                                    @foreach ($blog_form->images as $image)
                                        <img class="card-img-top" src="{{ secure_asset('storage/image/' . $image->image_path) }}">
                                        <br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
            本当に削除してもよろしいですか？<br><br>
            <a href="{{ route('admin.blog.delete', ['id' => $blog_form->id]) }}" class="btn btn-primary">削除</a>
            <a href="{{ url('admin/blog') }}" class="btn btn-primary">戻る</a>
        </div>
    </div>
</div>
@endsection
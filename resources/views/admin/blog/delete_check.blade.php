@extends('layouts.admin')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $blog_form->title }}</div>
                <div class="post">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ $blog_form->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="body mt-3">
                                {{ $blog_form->body }}
                            </div>
                        </div>
                        <div class="image col-md-6 text-right mt-4">
                            @if ($blog_form->image_path)
                                <img src="{{ secure_asset('storage/image/' . $blog_form->image_path) }}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
            本当に削除してもよろしいですか？<br>
            <a href="{{ route('admin.blog.delete', ['id' => $blog_form->id]) }}" class="btn btn-primary">削除</a>
            <a href="{{ url('admin/blog') }}" class="btn btn-primary">戻る</a>
        </div>
    </div>
</div>
@endsection
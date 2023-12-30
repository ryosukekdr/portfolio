@extends('layouts.admin')
@section('title', 'プロフィールの編集')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    <script src="{{ mix('js/counter.js') }}" defer></script> {{-- ブログタイトルの文字数カウンター --}}
 
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 style="margin-bottom: 10%">プロフィールの編集</h2>
                <form action="{{ route('admin.user.profile_comment.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0) {{--バリデーションに引っかかったらエラー表示--}}
                        <ul>
                            @foreach($errors->all() as $e)
                                <font color="red"> <li style="list-style: none;">⚠{{ $e }}</li></font>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <div class="col-md-9">
                            <textarea id="count_target" class="form-control" name="profile_comment" rows="10" placeholder="プロフィール" onfocus="this.placeholder=''" onblur="this.placeholder='プロフィール'">{{ old('profile_comment', \Auth::user()->profile_comment) }}</textarea>
                            <p>255文字まで（現在 <span id="count">0</span> 文字）</p>
                        </div>
                    </div>
                    
                    @csrf
                    <input type="submit" class="btn btn-primary" value="登録">
                    @if (\Auth::user()->profile_comment != NULL)
                        <a href="{{ route('admin.user.profile_comment.delete') }}" class="btn btn-primary">削除</a>
                    @endif
                    <a href="{{ url('/mypage') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection
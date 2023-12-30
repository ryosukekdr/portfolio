@extends('layouts.admin')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 style="margin-bottom: 10%">アイコン画像の編集</h2>
                <form action="{{ route('admin.user.profile_icon.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0) {{--バリデーションに引っかかったらエラー表示--}}
                        <ul>
                            @foreach($errors->all() as $e)
                                <font color="red"> <li style="list-style: none;">⚠{{ $e }}</li></font>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3">画像（最大2MB）</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="profile_icon">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="登録">
                    @if (\Auth::user()->profile_icon != NULL)
                        <a href="{{ route('admin.user.profile_icon.delete') }}" class="btn btn-primary">削除</a>
                    @endif
                    <a href="{{ url('/mypage') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection

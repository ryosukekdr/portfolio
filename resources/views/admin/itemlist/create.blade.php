@extends('layouts.admin')
@section('title', '持ち物リストの新規作成')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>持ち物リスト新規作成</h2>
                <form action="{{ route('admin.itemlist.create') }}" method="post">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">アイテム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="item" value="{{ old('title') }}" placeholder="アイテム">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">備考</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="note" value="{{ old('note') }}" placeholder="備考があれば記載">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="作成">
                    <a href="{{ route('admin.itemlist.index') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection
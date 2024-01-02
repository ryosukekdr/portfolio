@extends('layouts.admin')
@section('title', 'ブログ一覧')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2>ブログ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.blog.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('admin.blog.index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div style="overflow-x:scroll; white-space: nowrap">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th width="20%">旅行期間</th>
                        <th width="20%">タイトル</th>
                        <th width="40%">本文</th>
                        <th width="10%">ステータス</th>
                        <th width="5%">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $blog)
                        <tr>
                            <th>{{ date('Y/m/d', strtotime($blog->departure_date)) }}　～　{{ date('Y/m/d', strtotime($blog->arrival_date)) }}</th>
                            <td>{{ Str::limit($blog->title, 20) }}</td>
                            <td>{{ Str::limit($blog->body, 50) }}</td>
                            <td>
                                @if ($blog->status ==1)
                                    公開
                                @else
                                    下書き
                                @endif
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('admin.blog.edit', ['id' => $blog->id]) }}">編集</a>
                                </div>
                                <div>
                                    <a href="{{ route('admin.blog.delete_check', ['id' => $blog->id]) }}">削除</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
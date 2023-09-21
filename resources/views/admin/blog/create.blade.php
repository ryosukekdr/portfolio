{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ブログの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ブログ新規作成</h2>
                <form action="{{ route('admin.blog.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                               <font color="red"> <li class="list-style-none">⚠{{ $e }}</li></font>
                            @endforeach
                        </ul>
                    @endif
                    {{--@php {{ echo $msg; }} @endphp--}}
                    <div class="form-group row">
                        <label class="col-md-3">タイトル</label>
                        <div class="col-md-9">
                            <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="タイトル" onfocus="this.placeholder=''" onblur="this.placeholder='タイトル'">
                            <p>255文字まで（現在 <span id="count">0</span> 文字）</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">本文</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="body" rows="20" placeholder="近況アップデートを投稿" onfocus="this.placeholder=''" onblur="this.placeholder='近況アップデートを投稿'">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">画像（最大2MB）</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="image[]" multiple>　{{--複数の画像をControllerに渡すためにnameを配列にする--}}
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" name="status" value="投稿">
                    <input type="submit" class="btn btn-primary" name="status" value="下書き保存">
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection
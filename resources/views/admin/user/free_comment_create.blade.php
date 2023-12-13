@extends('layouts.admin')
@section('title', 'コメントの編集')

@section('content')
    <script src="{{ mix('js/counter.js') }}" defer></script> {{-- ブログタイトルの文字数カウンター --}}
 
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 style="margin-bottom: 10%">コメントの編集</h2>
                <form action="{{ route('admin.user.free_comment.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0) {{--バリデーションに引っかかったらエラー表示--}}
                        <ul>
                            @foreach($errors->all() as $e)
                                <font color="red"> <li style="list-style: none;">⚠{{ $e }}</li></font>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <div class="col-md-9">
                            <textarea id="count_target" class="form-control" name="free_comment" rows="10" placeholder="コメント" onfocus="this.placeholder=''" onblur="this.placeholder='コメント'">{{ \Auth::user()->free_comment }}</textarea>
                            <p>255文字まで（現在 <span id="count">0</span> 文字）</p>
                        </div>
                    </div>
                    
                    @csrf
                    <input type="submit" class="btn btn-primary" value="登録">
                    @if (\Auth::user()->free_comment != NULL)
                        <a href="{{ route('admin.user.free_comment.delete') }}" class="btn btn-primary">削除</a>
                    @endif
                    <a href="{{ url('/mypage') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection
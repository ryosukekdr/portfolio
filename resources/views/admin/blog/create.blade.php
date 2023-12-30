@extends('layouts.admin')
@section('title', 'ブログの新規作成')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    {{-- humanityテーマのカレンダーCSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.min.css">
    
    <!--jQueryプラグインMultiple Select読み込み-->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
    
    {{-- jQuery UIのJavaScript--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    {{-- jQueryのカレンダーを日本語にカスタマイズ --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    
    <script src="{{ mix('js/datepicker.js') }}" defer></script> {{-- jQueryのカレンダーをカスタマイズ --}}
    <script src="{{ mix('js/country_menu.js') }}" defer></script> {{-- 訪問国のプルダウンメニューをカスタマイズ --}}
    <script src="{{ mix('js/counter.js') }}" defer></script> {{-- ブログタイトルの文字数カウンター --}}
 
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 style="margin-bottom: 10%">ブログ新規作成</h2>
                <form action="{{ route('admin.blog.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0) {{--バリデーションに引っかかったらエラー表示--}}
                        <ul>
                            @foreach($errors->all() as $e)
                                <font color="red"> <li style="list-style: none;">⚠{{ $e }}</li></font>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3">訪問先</label>
                        <div class="col-md-9">
                            <select id="select" name="country[]" multiple="multiple" placeholder="国を選択"> {{--国のプルダウンメニュー生成--}}
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">旅行期間</label>
                        <div class="col-md-9 display-flex-space-between">
                            {{-- カレンダー挿入 --}}
                            <input type="text" class="datepicker" name="departure_date" placeholder="出発日" value="{{ old('departure_date') }}">
                            <input type="text" class="datepicker" name="arrival_date" placeholder="帰着日" value="{{ old('arrival_date') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">タイトル</label>
                        <div class="col-md-9">
                            <input type="text" id="count_target" class="form-control" name="title" value="{{ old('title') }}" placeholder="タイトル" onfocus="this.placeholder=''" onblur="this.placeholder='タイトル'">
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
                    <a href="{{ url('admin/blog') }}" class="btn btn-primary">戻る</a>
                </form>
            </div>
        </div>
    </div>
@endsection
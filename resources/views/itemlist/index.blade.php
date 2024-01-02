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
    <div class="itemlist-container">
        <div class="container__itemlist">
            <table>
                <thead>
                    <tr>
                        <th width="20%">No.</th>
                        <th width="50%">アイテム</th>
                        <th>役立ちポイント</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itemlists as $itemlist)
                        <tr>
                            <th>{{ $No ++ }}</th>
                            <td>{{ Str::limit($itemlist->item, 100) }}</td>
                            <td>{{ Str::limit($itemlist->note, 100) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <i class="far fa-file-excel" style="margin-left:15%"><a href="{{ route('downloadCsv')}}">Excelダウンロード</a></i>
    </div>
@endsection
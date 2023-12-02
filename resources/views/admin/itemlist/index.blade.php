@extends('layouts.admin')
@section('title', '持ち物リスト')

@section('content')
    <div class="container">
        <div class="row">
            <h2>持ち物リスト</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.itemlist.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">アイテム</th>
                                <th width="20%">備考</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $itemlist)
                                <tr>
                                    <th>{{ $itemlist->id }}</th>
                                    <td>{{ Str::limit($itemlist->item, 100) }}</td>
                                    <td>{{ Str::limit($itemlist->note, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.itemlist.edit', ['id' => $itemlist->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.itemlist.delete_check', ['id' => $itemlist->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
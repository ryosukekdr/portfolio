@extends('layouts.app')

@section('content')
<div class="itemlist-container">
    <div class="container__itemlist">
        <table>
            <thead>
                <tr>
                    <th width="7%">No.</th>
                    <th width="45%">アイテム</th>
                    <th width="90%">役立ちポイント</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $itemlist)
                    <tr>
                        <th>{{ $itemlist->id }}</th>
                        <td>{{ Str::limit($itemlist->item, 100) }}</td>
                        <td>{{ Str::limit($itemlist->note, 100) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <i class="far fa-file-excel margin-left-20"><a href="{{ route('downloadCsv')}}">Excelダウンロード</a></i>
    </div>
@endsection
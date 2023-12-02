@extends('layouts.admin')
@section('title', '持ち物リストの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>持ち物リスト編集</h2>
                <form action="{{ route('admin.itemlist.update') }}" method="post">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="item">アイテム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="item" value="{{ $itemlist_form->item }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="note">備考</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="note" value="{{ $itemlist_form->note }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $itemlist_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                            <a href="{{ route('admin.itemlist.index') }}" class="btn btn-primary">戻る</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
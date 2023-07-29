@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $itemlist_form->item }}</div>
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $itemlist_form->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="body mt-3">
                                    {{ $itemlist_form->note }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                本当に削除してもよろしいですか？<br>
                <a href="{{ route('admin.itemlist.delete', ['id' => $itemlist_form->id]) }}" class="btn btn-primary">削除</a>
                <a href="{{ route('admin.itemlist.index') }}" class="btn btn-primary">戻る</a>
            </div>
        </div>
    </div>
</div>
                    
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('退会') }}</div>
                </div>
                <br>
                本当に退会してもよろしいですか？<br>
                <a href="{{ route('admin.user.delete') }}" class="btn btn-primary">退会</a>
                <a href="{{ url('admin/user') }}" class="btn btn-primary">戻る</a>
            </div>
        </div>
    </div>
@endsection
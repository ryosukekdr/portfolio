@extends('layouts.app')

@section('content')
<div class="container margin-top5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('退会') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.user.name_change') }}">
                        @csrf
                        <div class="row mb-3">
                            本当に退会してもよろしいですか？
                            <a href="{{ route('admin.user.delete') }}">退会</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

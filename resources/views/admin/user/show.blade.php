@extends('layouts.admin')

@section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
@section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
@section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('アカウント設定') }}</div>
                    <div class="card-body row mb-3">
                        @if (session('msg_success'))  <!--ユーザー名、メールアドレス変更時のメッセージ-->
                            <div class="alert alert-success" role="alert">
                                {{ session('msg_success') }}
                        　  </div>
                        @endif
                        @if (session('status'))  <!--パスワード変更時のメッセージ-->
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-8 col-form-label text-md-end">ユーザー名　：　{{ $user->name }} <a href="{{ route('admin.user.name_edit') }}">編集</a></div>
                        <div class="col-md-8 col-form-label text-md-end">メールアドレス　：　{{ $user->email }} <a href="{{ route('admin.user.email_edit') }}">編集</a></div>
                        <div class="col-md-8 col-form-label text-md-end">パスワード　：　{{ "●●●●●●●● "}} <a href="{{ route('admin.user.password_edit') }}">編集</a></div>
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('admin.user.delete_check') }}" class="btn btn-primary">退会</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

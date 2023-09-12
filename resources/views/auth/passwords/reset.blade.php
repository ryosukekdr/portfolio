@extends('layouts.app')

@section('content')
<div class="container margin-top5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('パスワード再設定') }}</div>

                <div class="card-body">
                    @if (!(session('status')))
                        <div class="alert alert-danger" role="alert">
                            {{ 'パスワード再設定用メールの有効期限が切れています' }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="row mb-3">
                            <label for="current-password" class="col-md-4 col-form-label text-md-end">{{ __('現在のパスワード') }}</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control @error('password') is-invalid @enderror" name="current_password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>-->   <!--メールアドレス入力不要とするため削除。以下もhiddenに変更-->

                            <div class="col-md-6">
                                <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                <!--@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('新しいパスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                    @if($message == "パスワードは8文字以上に設定してください")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @endif
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('新しいパスワード（再入力）') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="確認のためもう一度入力してください" required autocomplete="new-password">
                                
                                @error('password')
                                    @if($message == "入力されたパスワードが一致しません")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @endif
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('変更') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

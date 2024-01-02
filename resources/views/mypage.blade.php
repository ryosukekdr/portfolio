@extends('layouts.app')

    @if (Request::routeIs('userpage'))
        @section('home-link')<a href="{{ route('userpage', ['user_id' => $user->id]) }}">ホーム</a>@endsection
        @section('blog-index')<a href="{{ route('blog', ['user_id' => $user->id]) }}">ブログ閲覧</a>@endsection
        @section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => $user->id]) }}">私の持ち物リスト</a>@endsection
        @section('username'){{$user->name}}さんのページ@endsection
    @else
        @section('home-link')<a href="{{ route('mypage') }}">ホーム</a>@endsection
        @section('blog-index')<a href="{{ route('blog', ['user_id' => \Auth::user()->id]) }}">ブログ閲覧</a>@endsection
        @section('itemlist-index')<a href="{{ route('itemlist', ['user_id' => \Auth::user()->id]) }}">私の持ち物リスト</a>@endsection
        @section('username')自分のページ@endsection
    @endif

@section('content')
    <script src="{{ mix('js/loading.js') }}" defer></script>
    
    <div id="loading">
        <img class="spin" src="{{ secure_asset('spin.png') }}">
        <div id="loading-screen"></div>
    </div>
    <div class="row" style="margin:0;">
        <article class="col-md-9" style="padding:0;">
            @if (Request::routeIs('userpage'))
                @if ($user->cover_photo != NULL)
                    <img src="{{ secure_asset('storage/image/' . $user->cover_photo) }}" class="wall" alt="カバー写真">
                @else
                    <img src="{{ secure_asset('cover_photo.png') }}" style="width: 70%;" alt="カバー写真">
                @endif
            @else
                @if (\Auth::user()->cover_photo != NULL)
                    <a href="{{ route('admin.user.cover_photo.add') }}">
                        <div class="wall">
                            <img src="{{ secure_asset('storage/image/' . \Auth::user()->cover_photo) }}" style="width: 100%;" alt="カバー写真">
                            <div class="mask">
                                <div class="caption">カバー写真の編集</div>
                            </div>
                        </div>
                    </a>
                @else
                    <div class="wall-box"><a href="{{ route('admin.user.cover_photo.add') }}"><div style="text-align: center;">カバー写真を設定できます</div></a></div>
                @endif
            @endif
            <div style="margin-right:3%; margin-left:3%">
                @if (Request::routeIs('userpage'))
                    @if ($user->free_comment != NULL)
                        <div class="" style="white-space: pre-line;">{{$user->free_comment}}</div>
                    @else
                        <div class="">コメントが記載されていません</div>
                    @endif
                @else
                    @if (\Auth::user()->free_comment != NULL)
                        <a href="{{ route('admin.user.free_comment.add') }}">
                            <div class="" style="white-space: pre-line;">{{\Auth::user()->free_comment}}</div>
                        </a>
                    @else
                        <div class="comment-box" style="margin-left: 5%;"><a href="{{ route('admin.user.free_comment.add') }}"><div style="text-align: center;">コメントを記載できます</div></a></div>
                    @endif
                @endif
            </div>
        </article>
        <aside class="col-md-3">
            <br>
            <i class="fas fa-user-circle profile"> プロフィール</i>
            <div class="text-align-center">
                @if (Request::routeIs('userpage'))
                    @if ($user->profile_icon != NULL)
                        <img src="{{ secure_asset('storage/image/' . $user->profile_icon) }}" class="profile-icon" alt="アイコン画像">
                    @else
                        <img src="{{ secure_asset('profile_icon.jpg') }}" style="width: 50%;" alt="アイコン画像">
                    @endif
                @else
                    @if (\Auth::user()->profile_icon != NULL)
                        <a href="{{ route('admin.user.profile_icon.add') }}">
                            <div class="wall">
                                <img src="{{ secure_asset('storage/image/' . \Auth::user()->profile_icon) }}" class="profile-icon" alt="アイコン画像">
                                <div class="mask">
                                    <div class="caption" style="font-size: 100%;">アイコンの編集</div>
                                </div>
                            </div>
                        </a>
                    @else
                        <a href="{{ route('admin.user.profile_icon.add') }}">
                            <div class="wall">
                                <img src="{{ secure_asset('profile_icon.jpg') }}" style="width: 50%;" alt="アイコン画像">
                                <div class="mask">
                                    <div class="caption" style="font-size: 100%;">アイコンの編集</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endif
            </div>
            <div class="margin-top3">
            @if (Request::routeIs('userpage'))
                @if ($user->profile_comment != NULL)
                    <div class="" style="white-space: pre-line;">{{$user->profile_comment}}</div>
                @else
                    <div class="">プロフィールが記載されていません</div>
                @endif
            @else
                @if (\Auth::user()->profile_comment != NULL)
                    <a href="{{ route('admin.user.profile_comment.add') }}">
                        <div class="" style="white-space: pre-line;">{{\Auth::user()->profile_comment}}</div>
                    </a>
                @else
                    <div class="comment-box"><a href="{{ route('admin.user.profile_comment.add') }}"><div style="text-align: center;">プロフィールを記載できます</div></a></div>
                @endif
            @endif
            </div>
        </aside>
    </div>
@endsection

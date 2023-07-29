@extends('layouts.app')

@section('content')
<div class="detail-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="detail-title">{{ $post->title }}</h1>
            <div class="detail-row">
                        <div class="text col-md-6">
                                <div class="body mt-3 kaigyo">
                                    {{ $post->body }}
                                </div>
                        </div>
                        <div class="detail-image col-md-6 text-right mt-4">
                                @if ($post->images != NULL)  {{--hasmanyリレーションで$postが複数持ってる画像を１枚ずつ表示--}}
                                    @foreach ($post->images as $image)
                                        <img src="{{ secure_asset('storage/image/' . $image->image_path) }}">
                                        <br>
                                    @endforeach
                                @endif
                        </div>
            </div>
            <div class=detail-footer>
                <div class="date">{{ date('Y年m月d日', strtotime($post->edited_at)) }}</div>
                <div class="etsuran">{{ $post->view_count }}</div>
            </div>
        </div>
    </div>
</div>
@endsection  {{--endsectionを消すとナビバーがmainの下に来てしまう--}}
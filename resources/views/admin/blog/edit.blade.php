@extends('layouts.admin')
@section('title', 'ブログの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ブログ編集</h2>
                <form action="{{ route('admin.blog.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $blog_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $blog_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像の追加</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image[]" multiple>　{{--複数の画像をControllerに渡すためにnameを配列にする--}}
                        </div>
                    </div>
                    <div class="form-check">
                        削除する画像を選択
                    </div>
                    <div class="image-edit">
                        @if ($blog_form->images != NULL)   {{--hasmanyリレーションで$blog_formが複数持ってる画像を１枚ずつ表示--}}
                            @foreach ($blog_form->images as $image)
                                <input type="checkbox" name="image_id[]" id="{{$image->id}}" value="{{ $image->id }}">　{{--checkboxだから複数選択できる。nameを配列にしないとControllerに１データしか渡せない。選んだ画像のidをvalueでControllerに渡す--}}
                                <label for="{{$image->id}}"><img src="{{ secure_asset('storage/image/' . $image->image_path) }}" alt="画像"></label> {{--labelを使うにはclassじゃなくidじゃないとダメ。そのため$image->idを利用した--}}
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="blog_id" value="{{ $blog_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" name="status" value="投稿">
                            <input type="submit" class="btn btn-primary" name="status" value="下書き保存">
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-primary">戻る</a>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($blog_form->histories != NULL)
                                @foreach ($blog_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
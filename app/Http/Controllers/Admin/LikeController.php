<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Blog;

class LikeController extends Controller
{
    /**
     * いいねの付与・削除を実行
     * 
     * @param Request $request
     * @return response
     */
    public function like(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        
        //ユーザーがこの投稿にまだいいねしていなかったら、いいねをデータベースに保存
        //Blogモデルに定義した関数isLikeByで判定
        if (!$blog->isLikedBy(\Auth::user())) {
            $like = new Like; //blogsテーブルとusersテーブルの中間テーブルがlikesテーブル
            $like->blog_id = $request->blog_id; //いいねされたブログのidを保存
            $like->user_id = \Auth::user()->id; //いいねしたユーザのidを保存
            $like->save();
        } else { //ユーザーがこの投稿に既にいいねしていたら、データベースからいいねを削除
            $blog->likes->where('user_id', \Auth::user()->id)->first()->delete();
        }
        //Blogモデルのリレーション名likesにLaravelのwithCountメソッドをすることで、このブログの最新の総いいね数を取得
        $blog_likes_count = Blog::withCount('likes')->find($request->blog_id)->likes_count;
        $param = ['blog_likes_count' => $blog_likes_count];
        
        return response()->json($param); //JSONデータをjQueryに返す
    }
}

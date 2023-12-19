<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Country;
use Exception;

/**
  *ブログを表示するためのコントローラ
  */
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 投稿者が公開状態にしているブログ一覧を表示すると同時に、ブログに紐づけられた国を地図上で塗りつぶす
     * 世界地図上の国がクリックされたら、クリックされた国が紐づけられたブログだけに絞り込む
     * 
     * @param Request $request
     * @return view
     */
    public function blog(Request $request)
    {
        //status=1（公開状態）のみに絞り、いいね数を取得。ここではgetせずに条件分岐後でgetする。
        $blogs = Blog::withCount('likes')->where('user_id', $request->user_id)->where('status',1);
        
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (!User::where('id', $request->user_id)->exists()) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $blogs_id = $blogs->pluck("id");
        
        //中間テーブルによって上記$blogs_idと紐づけられている国を全て取得する
        $visited_countries = Country::whereHas('blogs', function($q) use($blogs_id)  {
            $q->whereIn('blogs.id', $blogs_id);
        })->get();
        
        //上記で取得した$visited_countriesのcode（国コード）とname（カナ名）を配列に格納する。
        //APIがcodeから地図上の位置を判断して塗りつぶす。カーソルを当てた国のnameが地図上に表示される。
        $country_codes = [["code","name"]];
        foreach($visited_countries as $visited_country){
            array_push($country_codes, [$visited_country->code, $visited_country->name]);
        }
        
        //世界地図がクリックされていないときのエラー対策
        $selected_country = new Country;
        
        //世界地図をクリックされた場合の処理
        if($request->has('country_code')) {
            //クリックされた国のコードをクエリパラメータから取得
            $country_code = $request->country_code;
            //取得した国コードが紐づけられたブログだけに絞り込む
            $blogs->whereHas('countries', function ($q) use ($country_code) {
                $q->where('code', $country_code);
            });
            //クリックされた国をCountryモデルから取得する。あいさつAPIと国旗APIに必要なため。
            $selected_country = Country::where('code', $country_code)->first();
        }
        //条件分岐で生成したクエリビルダ結果をgetする
        $blogs = $blogs->get()->sortBy('edited_at');
    
        return view('blog/blog', ['blogs' => $blogs, 'country_codes' => $country_codes, 'selected_country' => $selected_country, 'user_id' => $request->user_id]);
    }

    /**
     * ブログ一覧ページでタイトルをクリックすると、ブログ詳細を表示させる
     * 
     * @param Request $request
     * @return view
     */
    public function blog_detail(Request $request)
    {
        //クリックされたブログを取得。いいね付与数も同時に取得。
        $blog = Blog::withCount('likes')->find($request->id);
        
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($blog)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $blog->view_count ++;  //ブログ閲覧回数カウント変数を更新
        $blog->save();
        
        return view('blog/blog_detail', ['blog' => $blog, 'user_id' => $request->user_id]);
    }
}

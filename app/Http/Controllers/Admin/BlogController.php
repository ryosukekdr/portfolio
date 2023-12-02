<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //トランザクションに必要

use App\Models\Blog;
use App\Models\Image;
use App\Models\User;
use App\Models\Country;
use Carbon\Carbon;
use Exception;
use Validator;

 /**
  *ブログ投稿のCRUD機能のコントローラ
  */
class BlogController extends Controller
{
    /**
     * ブログの新規作成ボタンをクリックされたら、作成画面に飛ばす。
     * 
     * @return view
     */
    public function add()
    {
        $countries = Country::all(); //国を取得して渡す
        
        return view('admin.blog.create', ['countries' => $countries]);
    }
    
    /**
     * ブログを新規作成する
     * 作成画面の入力情報をデータベースに保存する
     * 
     * @param Request $request
     * @return redirect
     */
    public function create(Request $request)
    {
        //Blogモデル,Countruモデルで定義した条件でバリデーション
        $this->validate($request, Blog::$rules);
        $this->validate($request, Country::$rules);
        
        DB::transaction(function () use ($request) { //トランザクション
        
            $blog = new Blog;
            $form = $request->all();
                
            //unset($form['_token']);  //Blogモデルでブラックリスト作ってるためunset不要
            $blog->fill($form);
            $blog->view_count = 0; //閲覧回数カウント変数を新規投稿の際に0で格納
            $blog->edited_at = Carbon::now(); //投稿日を保存
            $blog->user_id = \Auth::id();  //投稿者のuser_idを保存
        
            //投稿ボタンが押されたら1、下書き保存ボタンが押されたら0を格納
            if ($request->status == "投稿") {
                $blog->status = 1;
            }
            else {
                $blog->status = 0;
            }
        
            $blog->save();
            //選択された国のidを中間テーブルblog_country_tableに保存
            $country_ids = $request->country;
            $blog->countries()->sync($country_ids);
        
            //画像（複数可）が選択されている場合に保存する
            //inputタグをname="image[]"と配列にすると$request->file('image')に複数枚入る
            if ($request->file('image')!= NULL) {
                //inputタグで受け取った複数画像を１枚ずつデータベースに保存していく
                foreach($request->file('image') as $file) {
                    $image = new Image;
                    $path = $file->store('public/image');
                    $image->image_path = basename($path);
                    $image->blog_id = $blog->id;              //複数の画像に同じblog->idを紐づける
                    $image->filename = $file->getClientOriginalName();
                    $image->save();
                }
            }
        });
        
        return redirect('admin/blog');
    }
    
    /**
     * adminページのブログ一覧表示
     * 
     * @param Request $request
     * @return view
     */
    public function index(Request $request)
    {
        //タイトル検索窓に入力された単語を取得
        $cond_title = $request->cond_title;
        //検索が実行されたら表示対象を絞る
        if ($cond_title != '') {
            $posts = Blog::where('title', $cond_title)->where('user_id', \Auth::user()->id)->get();
        } else {
            $posts = \Auth::user()->blogs;
        }
        
        return view('admin.blog.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    /**
     * ブログの編集ボタンが押されたら編集ページに飛ばす
     * 
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        $blog = Blog::find($request->id);
        
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($blog)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $this->authorize('edit', $blog);  //ポリシー認可
        
        $selected_country_ids = [];
        
        //ブログに紐づいた国のidを上記の空配列に格納
        //viewで訪問国のselectタブにselected属性を使用するのに利用する
        foreach($blog->countries as $country){
            array_push($selected_country_ids, $country->id);
        }
    
        $countries = Country::all(); //国を取得して渡す
        
        return view('admin.blog.edit', ['blog' => $blog, 'countries' => $countries, 'selected_country_ids' => $selected_country_ids]);
    }

    /**
     * 作成済みブログの編集
     * 
     * @param Request $request
     * @return view
     */
    public function update(Request $request)
    {
        //Blogモデル,Countruモデルで定義した条件でバリデーション
        $this->validate($request, Blog::$rules);
        $this->validate($request, Country::$rules);
        
        DB::transaction(function () use ($request) { //トランザクション
        
            $blog = Blog::find($request->blog_id);
            $form = $request->all();
            //unset($blog['_token']);  //Blogモデルでブラックリスト作ってるからunset不要
            $blog->fill($form);
            $blog->edited_at = Carbon::now(); //編集日を保存
            
            //投稿ボタンが押されたら1、下書き保存ボタンが押されたら0を格納
            if ($request->status == "投稿") {
                $blog->status = 1;
            }
            else {
                $blog->status = 0;
            }
        
            $blog->save();
            //選択された国のidを中間テーブルblog_country_tableに保存
            $country_ids = $request->country;
            $blog->countries()->sync($country_ids);
            //削除画像が選択されている場合の処理
            if (isset($request->image_id)) {
                $selected_images = Image::find($request->image_id); //viewのinputタグをneme=image_id[]と配列にすれば複数受け取れる
                //選択された画像を削除
                foreach($selected_images as $selected_image) {
                    $selected_image->delete();
                }
            }
            //投稿画像が追加されている場合の処理
            if ($request->file('image')!= NULL) {
                //複数画像を１枚ずつデータベースに保存していく
                foreach($request->file('image') as $file) {
                    $image = new Image;
                    $path = $file->store('public/image');
                    $image->image_path = basename($path);
                    $image->blog_id = $blog->id;             //複数の画像に同じblog->idを紐づける
                    $image->filename = $file->getClientOriginalName();
                    $image->save();
                }
            }
        });

        return redirect('admin/blog');
    }
    
    /**
     * ブログ削除ボタンが押されたら確認ページに飛ばす
     * 
     * @param Request $request
     * @return view
     */
    public function delete_check(Request $request)
    {
        $blog = Blog::find($request->id);
        
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($blog)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $this->authorize('delete_check', $blog); //ポリシー認可
        
        return view('admin.blog.delete_check', ['blog_form' => $blog]);
    }
     
    /**
     * ブログ削除確認ページで「はい」が押されたら削除する
     * 外部キー制約によりブログの全画像が削除される
     * 
     * @param Request $request
     */
    public function delete(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->delete();
        
        return redirect('admin/blog');
    }
}

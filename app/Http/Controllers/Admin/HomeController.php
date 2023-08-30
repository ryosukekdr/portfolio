<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;
//use App\Models\History;
use App\Models\Image;
use Carbon\Carbon;

use Validator;

class HomeController extends Controller
{
    public function add()
    {
        return view('admin.blog.create');
    }
     
    public function create(Request $request)
    {
        DB::transaction(function () use ($request) { //トランザクション追加
        $this->validate($request, Blog::$rules);
        $blog = new Blog;
        $form = $request->all();
        
        /*$validator = Validator::make($request->file('image') , Image::$rules);
                if ($validator->fails()){
                    $msg = '画像がサイズオーバーです';
                    return view('admin/blog/create', ['msg'=>$msg, ]);
                }*/
                
        //unset($form['_token']);  //Blogモデルでブラックリスト作ってるからunset不要
        //unset($form['image']);
        $blog->fill($form);
        $blog->view_count = 0;//閲覧回数カウント変数を新規投稿の際に0で格納
        $blog->edited_at = Carbon::now();
        
        if ($request->status == "投稿") {
            $blog->status = 1;
        }
        else {
            $blog->status = 0;
        }
        
        $blog->save();
        
        if ($request->file('image')!= NULL) {     //inputタグをname="image[]"と配列にすると$request->file('image')に複数枚入る
            foreach($request->file('image') as $file) {               //inputタグで受け取った複数画像を１枚ずつデータベースに保存していく
            //dd($file);
                $image = new Image;                       //foreachの前にインスタンス化してしまうと上書きされてラスト１枚しか保存されないから毎回インスタンス化する
                $path = $file->store('public/image');
                $image->image_path = basename($path);
                $image->blog_id = $blog->id;              //複数の画像に同じblog->idを紐づける
                $image->filename = $file->getClientOriginalName();
                //$aa = $file->getClientMimeType();
                /*dd($image->toArray());
                
                $validator = Validator::make($image->toArray() , Image::$rules);//このバリデーション方法でもよかったが、mimetypesをどうやって取得すればいいかわからなかった…
                if ($validator->fails()) {
                    $msg = '画像がサイズオーバーです';
                    return view('admin/blog/create', ['msg'=>$msg, ]);
                }*/
                
                $image->save();
            }
        }
        });
        return redirect('admin/blog');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Blog::where('title', $cond_title)->get();
        } else {
            $posts = Blog::all();
        }
        return view('admin.blog.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
        // Blog Modelからデータを取得する
        $blog = Blog::find($request->id);
        if (empty($blog)) {
            abort(404);
        }
        return view('admin.blog.edit', ['blog_form' => $blog]);
    }

    public function update(Request $request)
    {
        DB::transaction(function () use ($request) { //トランザクション追加
        $this->validate($request, Blog::$rules);
        $blog = Blog::find($request->blog_id);  //blog_idはinputタグのname
        $form = $request->all();
        //unset($blog['_token']);  //Blogモデルでブラックリスト作ってるからunset不要
        $blog->fill($form);
        $blog->edited_at = Carbon::now();
        
        if ($request->status == "投稿") {
            $blog->status = 1;
        }
        else {
            $blog->status = 0;
        }
        $blog->save();
        
        if (isset($request->image_id)) { //画像削除の処理部分
            $selected_images = Image::find($request->image_id); //inputタグをneme=image_id[]と配列にすれば複数受け取れる
            
            foreach($selected_images as $selected_image) {
                $selected_image->delete();             //配列で受け取った$imageにはdelete();が効かないからforeachで１つずつdeleteする
            }
        }
        
        if ($request->file('image')!= NULL) {                         //画像追加の処理部分
            foreach($request->file('image') as $file) {               //inputタグで受け取った複数画像を１枚ずつデータベースに保存していく
                $image = new Image;                       //foreachの前にインスタンス化してしまうと上書きされてラスト１枚しか保存されないから毎回インスタンス化する
                $path = $file->store('public/image');
                $image->image_path = basename($path);
                $image->blog_id = $blog->id;              //複数の画像に同じblog->idを紐づける
                $image->filename = $file->getClientOriginalName();
                $image->save();
            }
        }
        });
        /*$history = new History();
        $history->blog_id = $blog->id;
        $history->edited_at = Carbon::now();
        $history->save();*/

        return redirect('admin/blog');
    }
    
     
    public function delete_check(Request $request)
    {
        // 該当するNews Modelを取得
        $blog = Blog::find($request->id);

        return view('admin.blog.delete_check', ['blog_form' => $blog]);
    }
     
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $blog = Blog::find($request->id);

        // 削除する
        $blog->delete();

        return redirect('admin/blog');
    }
}

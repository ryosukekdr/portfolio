<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/***アカウント設定のコントローラ*/
class UserController extends Controller
{
    /**
     * アカウント情報のページに飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        
        return view('admin.user.show', ['user' => $user]);
    }
    
    /**
     * メールアドレス変更ページに飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function email_edit()
    {
        $user = Auth::user();
        
        return view('admin.user.email_change');
    }
    
    /**
     * メールアドレスの変更を行う
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function email_change(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$email_rules);
        $user = Auth::user();
        $user->email = $request->email;
        $user->save();

        return redirect('admin/user')->with('msg_success', 'メールアドレスの更新が完了しました');
    }
    
    /**
     * アカウント名変更ページに飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function name_edit()
    {
        $user = Auth::user();
        
        return view('admin.user.name_change');
    }
    
    /**
     * アカウント名変更を行う
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function name_change(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$name_rules);
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect('admin/user')->with('msg_success', 'ユーザー名の更新が完了しました');
    }
    
    /**
     * パスワード変更ページに飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function password_edit()
    {
        return view('auth.passwords.email2');
    }
    
    /**
     * 退会ボタンが押されたら確認ページに飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function delete_check()
    {
        return view('admin.user.delete_check');
    }
    
    /**
     * 退会確認ページで「退会」が押されたら退会処理
     * 外部キー制約によりユーザの投稿ブログが全て削除される
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        Auth::user()->delete();
            
        return redirect('/');
    }
    
    /**
     * カバー写真の設定画面に飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function cover_photo_add()
    {
        return view('admin.user.cover_phpto_create');
    }
    
    /**
     * カバー写真を保存する
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cover_photo_create(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$cover_photo_rules);
        
        $path = $request->file('cover_photo')->store('public/image');
        $user = Auth::user();
        $user->cover_photo = basename($path);
        $user->save();
                    
        return redirect('/mypage');
    }
    
    /**
     * カバー写真を削除する
     * 
     * @return \Illuminate\Http\Response
     */
    public function cover_photo_delete()
    {
        $user = Auth::user();
        $user->cover_photo = null;
        $user->save();
        
        return redirect('/mypage');
    }
    
    /**
     * アイコン画像の設定画面に飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function profile_icon_add()
    {
        return view('admin.user.profile_icon_create');
    }
    
    /**
     * アイコン画像を保存する
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile_icon_create(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$profile_icon_rules);
        
        $path = $request->file('profile_icon')->store('public/image');
        $user = Auth::user();
        $user->profile_icon = basename($path);
        $user->save();
                    
        return redirect('/mypage');
    }
    
    /**
     * アイコン画像を削除する
     * 
     * @return \Illuminate\Http\Response
     */
    public function profile_icon_delete()
    {
        $user = Auth::user();
        $user->profile_icon = null;
        $user->save();
        
        return redirect('/mypage');
    }
    
    /**
     * プロフィールの投稿画面に飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function profile_comment_add()
    {
        return view('admin.user.profile_comment_create');
    }
    
    /**
     * プロフィールを保存する
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile_comment_create(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$profile_comment_rules);
        
        $user = Auth::user();
        $user->profile_comment = $request->profile_comment;
        $user->save();
                    
        return redirect('/mypage');
    }
    
    /**
     * プロフィールを削除する
     * 
     * @return \Illuminate\Http\Response
     */
    public function profile_comment_delete()
    {
        $user = Auth::user();
        $user->profile_comment = null;
        $user->save();
        
        return redirect('/mypage');
    }
   
    /**
     * コメントの投稿画面に飛ばす
     * 
     * @return \Illuminate\View\View
     */
    public function free_comment_add()
    {
        return view('admin.user.free_comment_create');
    }
    
    /**
     * コメントを保存する
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function free_comment_create(Request $request)
    {
        //Userモデルで定義した条件でバリデーション
        $this->validate($request, User::$free_comment_rules);
        
        $user = Auth::user();
        $user->free_comment = $request->free_comment;
        $user->save();
                    
        return redirect('/mypage');
    }
    
    /**
     * コメントを削除する
     * 
     * @return \Illuminate\Http\Response
     */
    public function free_comment_delete()
    {
        $user = Auth::user();
        $user->free_comment = null;
        $user->save();
        
        return redirect('/mypage');
    }
    
    /*public function sendResetLinkEmail2()
    {
        Mail::send('auth.passwords.reset2');
        
        return redirect('/mypage');
    }*/
}

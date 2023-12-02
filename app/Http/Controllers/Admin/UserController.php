<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

/**
  *アカウント設定のコントローラ
  */
class UserController extends Controller
{
    /**
     * アカウント情報のページに飛ばす
     * 
     * @return view
     */
    public function show()
    {
        $user = Auth::user();
        
        return view('admin.user.show', ['user' => $user]);
    }
    
    /**
     * メールアドレス変更ページに飛ばす
     * 
     * @return view
     */
    public function email_edit()
    {
        $user = Auth::user();
        
        return view('admin.user.email_change', ['user' => $user]);
    }
    
    /**
     * メールアドレスの変更を行う
     * 
     * @param Request $request
     * @return view
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
     * @return view
     */
    public function name_edit()
    {
        $user = Auth::user();
        
        return view('admin.user.name_change', ['user' => $user]);
    }
    
    /**
     * アカウント名変更を行う
     * 
     * @param Request $request
     * @return view
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
     * @return view
     */
    public function password_edit()
    {
        $user = Auth::user();
        
        return view('auth.passwords.email');
    }
    
    /**
     * 退会ボタンが押されたら確認ページに飛ばす
     * 
     * @return view
     */
    public function delete_check()
    {
        return view('admin.user.delete_check');
    }
    
    /**
     * 退会確認ページで「退会」が押されたら退会処理
     * 外部キー制約によりユーザの投稿ブログが全て削除される
     * 
     * @param Request $request
     */
    public function delete(Request $request)
    {
        Auth::user()->delete();
            
        return redirect('/');
    }
    
}

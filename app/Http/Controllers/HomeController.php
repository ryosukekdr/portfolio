<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class HomeController extends Controller
{
    /**@return void*/
    public function __construct()
    {
     $this->middleware('auth');
    }

    /**
     * ユーザ一覧を表示する
     *
     * @return \Illuminate\View\View
     */
    public function userlist()
    {
        $users = User::all();
        
        return view('home', ['users' => $users]);
    }
    
    /**
     * ユーザ（ログインユーザ以外）のホーム画面を表示させる
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     * 
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function userpage(Request $request)
    {
        $user = User::find($request->user_id);
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($user)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        return view('mypage', ['user' => $user]);
    }
    
    /**
     * ログインユーザのホーム画面を表示させる
     * 
     * @return \Illuminate\View\View
     * 
     */
    public function mypage()
    {
        return view('mypage');
    }
}

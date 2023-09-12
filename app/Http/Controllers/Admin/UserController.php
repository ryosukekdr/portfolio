<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//use App\User;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('admin.user.show', ['user' => $user]);
    }
    
    public function email_edit()
    {
        $user = Auth::user();
        return view('admin.user.email_change', ['user' => $user]);
    }
    
    public function email_change(Request $request)
    {
        $this->validate($request, User::$email_rules);
        $user = Auth::user();
        $user->email = $request->email;
        $user->save();

        return redirect('admin/user')->with('msg_success', 'メールアドレスの更新が完了しました');
        //return view('admin.user.show', ['msg_success'=>'メールアドレスの変更が完了しました', 'user' => $user]);
    }
    
    public function name_edit()
    {
        $user = Auth::user();
        return view('admin.user.name_change', ['user' => $user]);
    }
    
    public function name_change(Request $request)
    {
        $this->validate($request, User::$name_rules);
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect('admin/user')->with('msg_success', 'ユーザー名の更新が完了しました');
    }
    
    public function password_edit()
    {
        $user = Auth::user();
        return view('auth.passwords.email');
    }
    
    public function delete_check()
    {
        return view('admin.user.delete_check');
    }
    
    public function delete(Request $request)
    {
        Auth::user()->delete();
            
        return redirect('/');
    }
    
    public function password_confirm()
    {
        //$user = Auth::user();
        return view('auth.passwords.confirm');
    }
    
}

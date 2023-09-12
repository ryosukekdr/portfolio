<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request; //追加
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\Hash; //追加

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    
    public function reset(Request $request)
{
  //return (Hash::check($request->current_password, Auth::user()->password));
  if (! Hash::check($request->current_password, Auth::user()->password)) {
        //return back()->withErrors(['password' => ['The provided password does not match our records.']]);
        return redirect('admin/user')->with('msg_success', '失敗');
}
}

protected $redirectTo = 'admin/user';   //リダイレクト先を変更

}

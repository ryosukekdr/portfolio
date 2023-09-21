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

    use ResetsPasswords {
        ResetsPasswords::reset as original_reset;
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    
    
    
   public function reset(Request $request)  //現在のパスワードを確認させるためにresetアクションをオーバーライド
    {
        if (! Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current-password' => ['パスワードに誤りがあります']]);
        }
        
        $request->session()->passwordConfirmed();
        return $this->original_reset($request);
    }

protected $redirectTo = 'admin/user';   //リダイレクト先を変更

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function userlist()
    {
        $users = User::all();
        
        return view('home', ['users' => $users]);
    }
    
    public function userpage(Request $request)
    {
        $user = User::find($request->user_id);
        //View::share('user', $user);
        return view('mypage', ['user' => $user]);
    }
    
    public function mypage()
    {
        return view('mypage');
    }
}

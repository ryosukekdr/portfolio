<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
     public function blog()
    {
        $posts = Blog::all()->sortBy('edited_at');       //ブログを更新した新しい順に上から表示
        return view('blog', ['posts' => $posts]);
    }
    
     public function blog_id(Request $request)
    {
        //dd('blog_id呼ばれた');
        $post = Blog::find($request->id);
        $post->view_count += 1;  //閲覧回数カウント変数。このアクションが実施される度に１を足す。
        $post->save();
        //$image = Image::find(7);
        //dd($image);
        //dd($blog);
        //$posts = Blog::all()->sortByDesc('updated_at');
        //dd($request);
        //$blog_array=["blog1", "blog2"];
        //return view("$blog_array[0]", ['posts' => $posts]);
        return view('blog_detail', ['post' => $post]);
    }
    
     public function food()
    {
        return view('food');
    }
    
}

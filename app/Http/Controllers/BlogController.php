<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Country;
use Exception;

class BlogController extends Controller
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

     public function blog(Request $request)
    {
        $blogs = Blog::where('user_id', \Auth::user()->id)->where('status',1);    //status=1のみに絞る。0は非公開（下書き保存）。ここではgetせずに条件分岐後でgetする。
        $maps = $blogs->get();  //geochartを塗りつぶすために$map作成
        $codes = [["dummy","dummy"]];
        
        foreach($maps as $map){
            foreach($map->countries as $country){
                array_push($codes, [$country->code, $country->name]);
            }
            //$codes = $map->countries->pluck('name', 'code')->toArray();
        }
        //国が選択されていないときのエラー対策
        $selected_country = new Country;
        
        //世界地図をクリックされたら、国コードをクエリから取得
        if($request->has('country_code')) {
            $country_code = $request->query('country_code');
            $blogs->whereHas('countries', function ($query) use ($country_code) {
                $query->where('code', $country_code);
            });
            
            $selected_country = Country::where('code', $country_code)->first();
        }
        
       /* //世界地図をクリックされたら、国コードをクエリから取得
        if(isset($_GET['country_code'])) {  //$request  has?
            $country_code = $_GET['country_code'];
            $country_id = Country::where('code', $country_code)->first()->id;  //get()だと->idで取得できない
            $blogs_country = Country::find($country_id)->blogs;
            $blogs = $blogs_country->filter(function ($e) {
                return $e["status"] == 1 && $e["user_id"] == \Auth::user()->id;
            });
            $blogs = $blogs->sortBy('edited_at');
        }*/
        //dd($selected_country);
        //$selected_country = $countries = Country::all()->first();
        
        $blogs = $blogs->get()->sortBy('edited_at');
    
        return view('blog/blog', ['blogs' => $blogs, 'codes' => $codes, 'selected_country' => $selected_country]);
    }

    
     public function blog_detail(Request $request)
    {   
        $blog = Blog::find($request->id);
      
        try {
            if (empty($blog)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $blog->view_count ++;  //閲覧回数カウント変数。このアクションが実施される度に１を足す。
        $blog->save();
        //dd($blog->countries);
        return view('blog/blog_detail', ['blog' => $blog]);
    }
}

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
        $blogs = Blog::withCount('likes')->where('user_id', \Auth::user()->id)->where('status',1);    //status=1のみに絞る。0は非公開（下書き保存）。ここではgetせずに条件分岐後でgetする。
        $blogs_id = $blogs->pluck("id");
        
        $visited_countries = Country::whereHas('blogs', function($q) use($blogs_id)  {
            $q->whereIn('blogs.id', $blogs_id);
        })->get();
        
        $country_codes = [["code","name"]];
        foreach($visited_countries as $visited_country){
            array_push($country_codes, [$visited_country->code, $visited_country->name]);
        }
        
        //$codes = Country::select('code', 'name')->get()->toArray();  //世界地図が表示されなくなる
        //array_unshift($codes, ["dummy","dummy"]);
        //$codes = array_values($codes);
        //dd($codes);
        
        //$maps = $blogs->get();  //geochartを塗りつぶすために$map作成
        
        /*foreach($maps as $map){
            foreach($map->countries as $country){
                array_push($codes, [$country->code, $country->name]);
            }
        }*/
        
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
        
        $blogs = $blogs->get()->sortBy('edited_at');
    
        return view('blog/blog', ['blogs' => $blogs, 'country_codes' => $country_codes, 'selected_country' => $selected_country]);
    }

    
     public function blog_detail(Request $request)
    {
        $blog = Blog::withCount('likes')->find($request->id);
      
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

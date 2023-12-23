<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Itemlist;
use App\Models\User;

use Exception;

class ItemlistController extends Controller
{
    /**
     * 一般閲覧ページの持ち物リスト一覧表示
     * 
     * @return view
     */
    public function index(Request $request)
    {
        //ユーザの持ち物リストを取得
        $itemlists = Itemlist::where('user_id', $request->user_id)->get();
        
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (!User::where('id', $request->user_id)->exists()) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $No = 1;
        
        return view('itemlist.index', ['itemlists' => $itemlists, 'user_id' => $request->user_id, 'No' => $No]);
    }
}
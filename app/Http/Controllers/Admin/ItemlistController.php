<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

use App\Models\Itemlist;
use App\Models\User;

use Exception;

/**
  *持ち物リストのCRUD機能のコントローラ
  */
class ItemlistController extends Controller
{
    /**
     * 持ち物リストの新規作成ボタンをクリックされたら、作成画面に飛ばす。
     * 
     * @return view
     */
    public function add()
    {
        return view('admin.itemlist.create');
    }

    /**
     * 持ち物リストを新規作成する
     * 作成画面の入力情報をデータベースに保存する
     * 
     * @param Request $request
     * @return redirect
     */
    public function create(Request $request)
    {
        $this->validate($request, Itemlist::$rules);
        $itemlist = new Itemlist;
        $form = $request->all();
        
        //unset($form['_token']);  Itemlistモデルでブラックリスト作ってるからunset不要

        $itemlist->fill($form);
        $itemlist->user_id = \Auth::id();  //投稿者のuser_idを保存
        $itemlist->save();

        return redirect('admin/itemlist/index');
    }
    
    /**
     * 作成済み持ち物リストの編集
     * 
     * @param Request $request
     * @return redirect
     */
    public function update(Request $request)
    {
        $this->validate($request, Itemlist::$rules);
        $itemlist = Itemlist::find($request->id);
        $form = $request->all();
        
        //unset($itemlist_form['remove']);  Itemlistモデルでブラックリスト作ってるからunset不要
        //unset($itemlist_form['_token']);  Itemlistモデルでブラックリスト作ってるからunset不要
        
        $itemlist->fill($form)->save();
        
        return redirect('admin/itemlist/index');
    }
    
    /**
     * adminページの持ち物リスト一覧表示
     * 
     * @return view
     */
    public function index()
    {
        $itemlists = \Auth::user()->itemlists;
        
        return view('admin.itemlist.index', ['itemlists' => $itemlists]);
    }

    /**
     * 持ち物リストの編集ボタンが押されたら編集ページに飛ばす
     * 
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        $itemlist = Itemlist::find($request->id);
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($itemlist)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $this->authorize('edit', $itemlist);  //ポリシー認可
        
        return view('admin.itemlist.edit', ['itemlist_form' => $itemlist]);
    }
    
    /**
     * 持ち物リストの削除ボタンが押されたら確認ページに飛ばす
     * 
     * @param Request $request
     * @return view
     */
      public function delete_check(Request $request)
    {
        $itemlist = Itemlist::find($request->id);
        //存在しないクエリパラメータにアクセスされたときの例外処理
        try {
            if (empty($itemlist)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            abort(404);
        }
        
        $this->authorize('delete_check', $itemlist);  //ポリシー認可

        return view('admin.itemlist.delete_check', ['itemlist_form' => $itemlist]);
    }

    /**
     * 持ち物リストの削除確認ページで「削除」が押されたら削除する
     * 
     * @param Request $request
     * @return redirect
     */
     public function delete(Request $request)
    {
        $itemlist = Itemlist::find($request->id);
        $itemlist->delete();

        return redirect('admin/itemlist/index');
    }

}
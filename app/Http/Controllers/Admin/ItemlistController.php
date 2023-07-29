<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

use App\Models\Itemlist;

class ItemlistController extends Controller
{
    
    public function add()
    {
        return view('admin.itemlist.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Itemlist::$rules);
        $itemlist = new Itemlist;
        $form = $request->all();
        
        unset($form['_token']);

        $itemlist->fill($form);
        $itemlist->save();

        return redirect('admin/itemlist/index');
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Itemlist::$rules);
        $itemlist = Itemlist::find($request->id);
        $itemlist_form = $request->all();
        
        //unset($itemlist_form['remove']);
        unset($itemlist_form['_token']);
        
        $itemlist->fill($itemlist_form)->save();
        
        return redirect('admin/itemlist/index');
    }
    
    public function index()
    {
        $posts = Itemlist::all()->sortByDesc('updated_at');
        
        //return view('admin/itemlist/index');
        return view('admin.itemlist.index', ['posts' => $posts]);
    }
    
    public function itemlist()
    {
        $posts = Itemlist::all()->sortByDesc('updated_at');
        
        return view('itemlist.index', ['posts' => $posts]);
    }

    public function edit(Request $request)
    {
        $itemlist = Itemlist::find($request->id);
        if (empty($itemlist)) {
            abort(404);
        }
        return view('admin.itemlist.edit', ['itemlist_form' => $itemlist]);
    }
    
      public function delete_check(Request $request)
    {
        $itemlist = Itemlist::find($request->id);

        return view('admin.itemlist.delete_check', ['itemlist_form' => $itemlist]);
    }

     public function delete(Request $request)
    {
        $itemlist = Itemlist::find($request->id);
        $itemlist->delete();

        return redirect('admin/itemlist/index');
    }

}
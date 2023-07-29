<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 追記
use App\Models\Itemlist;

class ItemlistController extends Controller
{
    public function index(Request $request)
    {
        $posts = Itemlist::all()->sortBy('id');
        
        return view('itemlist.index', ['posts' => $posts]);
    }
}
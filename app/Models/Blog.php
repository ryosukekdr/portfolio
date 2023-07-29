<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // 以下を追記
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    //protected $table = 'blog'; //テーブル名を勝手に複数形blogsにされるのを回避！
    
    
    /*public function histories()
    {
        return $this->hasMany('App\Models\History');
    }*/
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
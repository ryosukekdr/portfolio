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
        //'image.*' => 'image|max:2048|mimetypes:image/jpg,image/jpeg,image/png,image/gif,image/bmp,image/svg,image/webp',  
        'image.*' => 'image|max:2000', //|mimes:jpg,jpeg,png,gif,bmp,svg,webp',  //image.*とすることで、requestで受け取った複数の画像を１枚ずつバリデーションできる
        //'file.*' => 'max:2048',
    
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
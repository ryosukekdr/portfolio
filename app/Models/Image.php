<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $guarded = array('id'); //ブラックトリスト
    
    /*public static $rules = array(
        'image_path' => 'required',
        'image' => 'image|max:2048',
        'image' => 'mimetypes:image/jpg,image/jpeg,image/png,image/gif,image/bmp,image/svg,image/webp',
        //'file' => 'mimes:jpg',
    );*/
}
    
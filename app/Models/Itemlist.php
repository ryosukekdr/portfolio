<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemlist extends Model
{
    use HasFactory;
    
    protected $guarded = array('id'); //ブラックリスト

    /** @var array $rules バリデーションで検証する設定情報の配列 */
    public static $rules = array(
        'item' => 'required'
    );
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    protected $guarded = array('id'); //ブラックリスト
    
    /**
     * いいねの付与者を取得
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * いいねが付与されているブログを取得
     */
    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}

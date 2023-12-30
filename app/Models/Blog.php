<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = array('id'); //ブラックリスト

    /** @var array $rules バリデーションで検証する設定情報の配列 */
    public static $rules = array(
        'departure_date' => 'required',
        'arrival_date' => 'required',
        'title' => 'required|max:255',
        'body' => 'required',
    );
    
    /**
     * ブログの画像を取得
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
    /**
     * ブログの投稿者を取得
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * ブログの国を取得
     */
    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
    
    /**
     * ブログに付与されたいいねを取得
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
   /**
    * いいねボタンを押したユーザに既に押されているか判定
    * ユーザがいいね済みのブログのidをpluckで取得し、その中に新しくいいねされたブログのidが含まれるかどうかを判定
    *
    * @param \App\Models\User $user
    * @return bool
    */
    public function isLikedBy($user): bool {
        return $user->likes->pluck("blog_id")->contains($this->id);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');

    /** @var array $rules バリデーションで検証する設定情報の配列 */
    public static $rules = array(
        'departure_date' => 'required',
        'arrival_date' => 'required',
        'title' => 'required|max:255',
        'body' => 'required',
        'image.*' => 'image|max:2000', //image.*とすることで、requestで受け取った複数の画像を１枚ずつバリデーションできる
    );
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
    
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
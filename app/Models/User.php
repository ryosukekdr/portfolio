<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordNotification; ////パスワードリセットメールをカスタマイズするために追加

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    /** @var array $name_rules バリデーションで検証する設定情報の配列 */
    public static $name_rules = array(
        'name' => 'required|string|max:255', //RegisterController.phpからコピペ
    );
    
    /** @var array $email_rules バリデーションで検証する設定情報の配列 */
    public static $email_rules = array(
        'email' => 'required|string|email|max:255|unique:users', //RegisterController.phpからコピペ
    );
    
    /** @var array $password_rules バリデーションで検証する設定情報の配列 */
    public static $password_rules = array(
        'password' => 'required|string|min:8|confirmed', //RegisterController.phpからコピペ
    );
    
    /** @var array $cover_photo_rules バリデーションで検証する設定情報の配列 */
    public static $cover_photo_rules = array(
        'cover_photo' => 'required|image|max:2000',
    );
    
    /** @var array $profile_icon_rules バリデーションで検証する設定情報の配列 */
    public static $profile_icon_rules = array(
        'profile_icon' => 'required|image|max:2000',
    );

    /** @var array $free_comment_rules バリデーションで検証する設定情報の配列 */
    public static $free_comment_rules = array(
        'free_comment' => 'required',
    );
    
    /** @var array $profile_comment_rules バリデーションで検証する設定情報の配列 */
    public static $profile_comment_rules = array(
        'profile_comment' => 'required|max:255',
    );

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * ユーザが投稿したブログを取得
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    
    /**
     * ユーザが付与したいいねを取得
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    /**
     * ユーザが投稿した持ち物リストを取得
     */
    public function itemlists()
    {
        return $this->hasMany(Itemlist::class);
    }
    
    /**
     * パスワードリセットメールをカスタマイズするためのオーバーライド
     * 
     * @param $token
     * @return void
     */
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    
    /**
    * ユーザの訪問国数をカウントする（同じ国を複数投稿していても1カウント）
    *
    * @return int 
    */
    public function CountryCount() {
        //ユーザが公開状態にしているブログ（status=1）にを取得
        $blogs = Blog::where('user_id', $this->id)->where('status',1);
        //$blogsのブログidを取得
        $blogs_id = $blogs->pluck("id");
        
        //中間テーブルによって上記$blogs_idと紐づけられている国を全て取得する
        $visited_countries = Country::whereHas('blogs', function($q) use($blogs_id)  {
            $q->whereIn('blogs.id', $blogs_id);
        });
        
        return $visited_countries->count();
    }
}

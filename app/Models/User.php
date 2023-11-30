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
    
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
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
}

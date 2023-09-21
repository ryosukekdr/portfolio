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
    
    public static $name_rules = array(   //RegisterController.phpからコピペ
        'name' => 'required|string|max:255',
    );
    
    public static $email_rules = array(   //RegisterController.phpからコピペ
        'email' => 'required|string|email|max:255|unique:users',
    );
    
    public static $password_rules = array(   //RegisterController.phpからコピペ
        'password' => 'required|string|min:8|confirmed',
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
    
    //パスワードリセットメールをカスタマイズするためにオーバーライド
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}

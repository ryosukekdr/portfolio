<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    /** @var array $rules バリデーションで検証する設定情報の配列 */
    public static $rules = array(
        'country' => 'required',
    );
    
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}

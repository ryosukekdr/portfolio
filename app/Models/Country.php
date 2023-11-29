<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    public static $rules = array(
        'country' => 'required',
    );
    
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}

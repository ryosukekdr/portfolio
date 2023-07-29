<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = ['filename'];
    
    public static $rules = array(
        //'image_path' => 'required',
        'image' => ['image', 'max:2048'],
    );

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}

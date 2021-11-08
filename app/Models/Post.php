<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // instancia de carbon
    protected $dates = ['published_at'];

    public function category()  // post->categor-name
    {
        return $this->belongsTo(Category::class);
    }
}

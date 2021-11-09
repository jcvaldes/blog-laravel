<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // instancia de carbon
    protected $dates = ['published_at'];

    // relacion many to one
    public function category()  // post->categor-name
    {
        return $this->belongsTo(Category::class);
    }
    // relacion many to many
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

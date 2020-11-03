<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    // use HasFactory;
    public $table = 'comments';

    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory;
    public $table = 'posts';

    // public $fillable = ['comment'];
    
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

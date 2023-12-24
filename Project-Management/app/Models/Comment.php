<?php
// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Post model
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
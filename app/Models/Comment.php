<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['user_id','user_post_id','comment'];

    public function userPost()
    {
        return $this->belongsTo(UserPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

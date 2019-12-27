<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $fillable=['user_id','title','images','image_url'];
    protected $hidden=['images'];
    protected $casts = [
        'images' => 'array',
        'image_url' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

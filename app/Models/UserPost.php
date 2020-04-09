<?php

namespace App\Models;

use App\NoPermissionModels\Like;
use Illuminate\Database\Eloquent\Model;
class UserPost extends Model
{
    protected $fillable=['user_id','title','images','image_url'];
    protected $hidden=['images'];
    protected $casts = [
        'images' => 'array',
        'image_url' => 'array'
    ];

    protected $appends = ['type','isliked'];

    public function getTypeAttribute()
    {
        return 'user_post';
    }

    public function getIslikedAttribute() {
        if(!$user = auth('api')->user()) return false;
        return (bool) $this->likes()->where('user_id', $user->id)->where('likeable_id', $this->id)->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}

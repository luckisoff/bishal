<?php

namespace App\Models;

use App\NoPermissionModels\Like;
use Illuminate\Database\Eloquent\Model;

class HotelPost extends Model
{
    protected $guarded=[];

    protected $appends = ['type','isliked'];

    protected $casts = [
        'images' =>'array'
    ];


    public function getIslikedAttribute() {
        if(!$user = aut('api')->user()) return false;
        return (bool) $this->likes()->where('user_id', $user->id)->where('likeable_id', $this->id)->first();
    }
    public function getTypeAttribute()
    {
        return 'hotel_post';
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
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

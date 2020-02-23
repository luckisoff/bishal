<?php

namespace App\Models;

use App\NoPermissionModels\Like;
use Illuminate\Database\Eloquent\Model;

class HotelPost extends Model
{
    protected $guarded=[];

    protected $casts = [
        'images' =>'array'
    ];

    protected $append = ['type'];

    public function getTypeAttribute()
    {
        return null;
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

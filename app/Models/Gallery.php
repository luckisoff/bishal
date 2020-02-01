<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable=['name','hotel_id','image','image_url'];

    public function setImageUrlAttribute($image)
    {
        $this->attributes['image_url']=\URL::to('/storage/hotels/gallery/'.$image);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}

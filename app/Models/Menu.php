<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded=[];

    protected $casts = [
        'items' => 'array'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function setImageAttribute($image)
    {
        $this->attributes['image']=\URL::to('/storage/hotels/menus/'.$image);
    }
}

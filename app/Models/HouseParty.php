<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseParty extends Model
{
    protected $guarded=[];

    protected $casts = [
        'items' => 'array'
    ];

    public function setImageAttribute($image) {
        $this->attributes['image'] = \URL::to('/storage/houseparty/'.$image);
    }
}

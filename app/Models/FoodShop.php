<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodShop extends Model
{
    protected $guarded=[];

    protected $casts = [
        'items' => 'array'
    ];

    public function setImageAttribute($image) {
        $this->attributes['image'] = \URL::to('/storage/foodshop/'.$image);
    }
}

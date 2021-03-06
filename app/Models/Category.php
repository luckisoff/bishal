<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function gifts()
    {
        return $this->hasMany(Gift::class)->orderBy('created_at','desc');
    }
}

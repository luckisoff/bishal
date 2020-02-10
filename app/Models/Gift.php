<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'highlights'    =>'array',
        'collections'   =>'array'
    ];
}

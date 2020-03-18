<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AllOrder;

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

    public function orders()
    {
        return $this->hasMany(AllOrder::class, 'orderable');
    }
}

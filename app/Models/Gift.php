<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AllOrder;

class Gift extends Model
{
    protected $guarded = [];

    protected $appends = ['quantity', 'total_price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getQuantityAttribute()
    {
        return $this->quantity = 1;
    }

    public function getTotalPriceAttribute()
    {
        return $this->total_price = $this->price;
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

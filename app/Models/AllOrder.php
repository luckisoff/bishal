<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllOrder extends Model
{
    protected $guarded = [];

    protected $casts = ['items' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

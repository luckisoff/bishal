<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllOrder extends Model
{
    protected $guarded = [];

    public function orderable()
    {
        return $this->morphTo();
    }

}

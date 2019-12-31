<?php

namespace App\Models;

use App\NoPermissionModels\Address;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded=[];

    public function addressLocation()
    {
        return $this->belongsTo(Address::class,'location');
    }
}

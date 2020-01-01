<?php

namespace App\Models;

use App\NoPermissionModels\Address;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable=['name','logo_url','logo','location','address','description','phone','website','open_time'];

    public function addressLocation()
    {
        return $this->belongsTo(Address::class,'location');
    }
}

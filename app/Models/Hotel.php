<?php

namespace App\Models;

use App\NoPermissionModels\Address;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable=['name','logo_url','logo','location','address','description','phone','website','open_time'];
    protected $hidden=['logo','location'];

    public function addressLocation()
    {
        return $this->belongsTo(Address::class,'location','id');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function posts()
    {
        return $this->hasMany(HotelPost::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

}

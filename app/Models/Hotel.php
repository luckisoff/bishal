<?php

namespace App\Models;

use App\NoPermissionModels\Address;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable=['name','logo_url','logo','location','address','description','phone','website','open_time','facilities','type'];
    protected $hidden=['logo','location'];

    protected $casts = [
        'facilities' => 'array'
    ];

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

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function managers()
    {
        return $this->belongsToMany(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->orderBy('created_at','desc');
    }

    public function newOrders()
    {
        return $this->hasMany(Order::class)->where('confirm',0)->orderBy('created_at','desc');
    }

}

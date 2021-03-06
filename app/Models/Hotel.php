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
        return $this->hasMany(Order::class)
                ->where('confirm',0)
                ->where('dispatched',0)
                ->where('success',0)
                ->orderBy('created_at','desc');
    }

    public function confirmedOrders()
    {
        return $this->hasMany(Order::class)
                    ->where('confirm',1)
                    ->where('dispatched',0)
                    ->orderBy('created_at','desc');
    }

    public function dispatchedOrders()
    {
        return $this->hasMany(Order::class)->where('dispatched',1)->where('success',0)->orderBy('updated_at','desc');
    }

    public function successOrders()
    {
        return $this->hasMany(Order::class)
                    ->where('confirm',1)
                    ->where('dispatched',1)
                    ->where('success',1)
                    ->orderBy('updated_at','desc');
    }

}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\NoPermissionModels\Birthdate;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userPosts()
    {
        return $this->hasMany(UserPost::class);
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }

    public function birthdates()
    {
        return $this->hasMany(Birthdate::class);
    }

    public function online()
    {
        return ($this->updated_at->diffInSeconds(Carbon::now()) <= 100);
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->orderBy('created_at','desc');
    }
}

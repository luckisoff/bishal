<?php

namespace App\NoPermissionModels;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Birthdate extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

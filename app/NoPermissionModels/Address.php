<?php

namespace App\NoPermissionModels;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['name'];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}

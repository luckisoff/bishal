<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;
use Spatie\Permission\Models\Role;

class HotelManagerController extends BaseAdminController
{
    public function store(User $user, Hotel $hotel)
    {
        try {
            if(!$user) throw new \Exception('No user selected',403);

            if(!$hotel) throw new \Exception('No hotel selected',403);

            $hotel->managers()->attach($user->id);

            $role = Role::firstOrCreate(['name'=>'manager']);

            $role->givePermissionTo('view hotel');

            $user->assignRole($role);

            $user->givePermissionTo('view hotel');

            return back()->with('success','A manager is attached');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(User $user, Hotel $hotel)
    {
        try {
            if(!$user) throw new \Exception('No user selected',403);

            if(!$hotel) throw new \Exception('No hotel selected',403);

            $hotel->managers()->detach($user->id);

            $user->removeRole('manager');

            $user->revokePermissionTo('view hotel');

            return back()->with('success','A manager is detached');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserController extends BaseAdminController
{
    public function index()
    {
        $users=User::orderBy('created_at','desc')->get();
        return view('admin.parts.users.index',compact('users'));
    }

    public function edit(User $user)
    {
        $permissions=Permission::orderBy('name','asc')->get();

        return view('admin.parts.users.edit',compact('permissions','user'));
    }

    public function update(Request $request,User $user)
    {
        $this->validate($request,[
            'name'=>'required',
            'dob'=>'required',
        ]);
        $input=$request->all();
        if(!empty($request->password) && !empty($request->old_password))
        {
            if(Hash::check($request->old_password,$user->password))
            {
                $this->validate($request,[
                    'password'=>'required|min:8|confirmed'
                ]);
                $input['password']=Hash::make($request->password);
            }
            else
            {
                return redirect()->back()->withErrors(['Old password is wrong'],'error');
            }
        }else{
            unset($input['old_password']);
            unset($input['password']);
            unset($input['password_confirmation']);
        }
        if($user->update($input))
        {
            $user->revokePermissionTo($user->getAllPermissions());
            $user->givePermissionTo($request->permissions);
            return redirect()->route('dashboard.users')->with('success','Update successful');
        }
        return redirect()->back()->withErrors(['Update failed'],'error');
    }

    public function destroy(User $user)
    {
        if(auth()->user()->id==$user->id)
        {
            return redirect()->back()->withErrors(['You can not delete yourself'],'error');
        }

        if($user->delete())
            return redirect()->back()->with('success','Delete successful');

        return redirect()->back()->withErrors(['Someting went wrong'],'error');
    }
}

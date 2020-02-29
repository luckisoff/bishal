<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['permission:view user'],['only'=>['index']]);
        $this->middleware(['permission:create user'],['ony'=>['edit','update']]);
        $this->middleware(['permission:delete user'],['only'=>['destroy']]);
        $this->middleware(['permission:update user'],['only'=>['edit','update']]);
        $this->middleware(['permission:update permission'],['only'=>['updatePermission']]);
    }
    public function index()
    {
        if(!auth()->user()->can('view user')) abort(403,'Permission denied');

        $users = User::orderBy('created_at','desc')->get();

        return view('admin.parts.users.index',compact('users'));
    }

    public function edit(User $user)
    {
        $permissions = Permission::orderBy('name','asc')->get();

        return view('admin.parts.users.edit',compact('permissions','user'));
    }

    public function update(Request $request,User $user)
    {
        if(!auth()->user()->can('update user'))
        {
            return redirect()->back()->withErrors("You don't have permission for this action",'error');
        }
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

        if($request->has('image'))
        {
            if( !empty($request->image))
            {
                $input['image']=Helper::upload_image($request->image,'/app/public/user/image');
                $input['image_url']=\URL::to('/storage/user/image/'.$input['image']);
                if($user->image)
                {
                    Helper::delete_image($user->image,'/app/public/user/image/');
                }
            }
        }

        unset($input['permissions']);
        if($user->update($input))
        {
            if($request->has('permissions'))
            {
                $user->revokePermissionTo($user->getAllPermissions());

                $user->givePermissionTo($request->permissions);
            }
            return back()->with('success','Update successful');
        }
        return redirect()->back()->withErrors(['Update failed'],'error');
    }

    public function destroy(User $user)
    {
        if(!auth()->user()->can('delete user'))
        {
            return redirect()->back()->withErrors("You don't have permission for this action",'error');
        }
        if(auth()->user()->id==$user->id)
        {
            return redirect()->back()->withErrors(['You can not delete yourself'],'error');
        }

        if($user->delete())
            Helper::delete_image($user->image,'/app/public/user/image/');
            return redirect()->back()->with('success','Delete successful');

        return redirect()->back()->withErrors(['Someting went wrong'],'error');
    }

    public function updatePermission()
    {
        if(!auth()->user()->can('update permission'))
        {
            return redirect()->back()->withErrors("You don't have permission for this action",'error');
        }
        if(!\Artisan::call('db:seed'))
        {
            \Artisan::call('storage:link');
            \Artisan::call('migrate');
            \Artisan::call('cache:clear');
            \Artisan::call('config:clear');
            \Artisan::call('view:clear');
            \Artisan::call('route:clear');
            return redirect()->back()->with('success','Database seeded and permissions created.');
        }
        return redirect()->back()->withErrors("Something went wrong",'error');
    }
}

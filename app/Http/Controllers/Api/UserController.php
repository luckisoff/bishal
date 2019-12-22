<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Log;
class UserController extends BaseApiController
{
    public function signup(Request $request)
    {
        \Artisan::call('passport:install');
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'username'=>'required|min:3|unique:users',
            'mobile'=>'required|min:10|max:13|unique:users',
            'email'=>'required|email|unique:users',
            'dob'=>'date_format:Y-m-d|before:15 years ago',
            'password'=>'required|min:8|confirmed',

        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),400);
        }
        $input=$request->all();
        $input['password']=Hash::make($request->password);
        try{
            if($user=User::create($input))
            {
                $data['token']=$user->createToken($user->username)->accessToken;
                $data['user']=$user;
                return $this->successResponse($data,'User Created');
            }
        }catch(\Exception $e)
        {
            Log::debug($e->getMessage());;
            return $this->errorResponse('Internal server error',500);
        }
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required',

        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),400);
        }
        try
        {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                $user = Auth::user();
                $data['token']=$user->createToken($user->username)->accessToken;
                $data['user']=$user;
                return $this->successResponse($data,'Login success');
            }
            else
            {
                return $this->errorResponse('Un Authorized',401);
            }
        }
        catch (\Throwable $th)
        {
            Log::debug($th->getMessage());
            return $this->errorResponse('Internal server error',500);
        }
    }

}

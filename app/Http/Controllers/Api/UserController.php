<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTopup;
use App\Notifications\NewUsers;
use Auth;
use Illuminate\Support\Facades\Notification;
use Log;
/**
 * @group Api User Management
 *
 * APIs for managing users
 */
class UserController extends BaseApiController
{
    /**
    *Create user
    *@bodyParam name string required full name of user
    *@bodyParam username string required a unique username of user
    *@bodyParam mobile string required a unique 10 digits mobile number of user
    *@bodyParam dob string required date of birth of user
    *@bodyParam email string required unique user of email
    *@bodyParam password string required password for user min charecters 8
    *@bodyParam password_confirmation string required password confirmation
    *@bodyParam gender string optional default gender is Male
    *@bodyParam country string optional country of user optional parameter
    */
    public function signup(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'username'=>'required|min:3|unique:users',
            'mobile'=>'required|min:10|max:13|unique:users',
            'email'=>'required|email|unique:users',
            'dob'=>'date_format:Y-m-d',
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
                try {
                    Notification::send(User::permission('receive notification')->get(),new NewUsers($user));
                } catch (\Throwable $th) {
                    Log::debug($th->getMessage());
                }

                $data['token']=$user->createToken($user->username)->accessToken;
                $data['user']=$user;
                return $this->successResponse($data,'User Created');
            }
        }catch(\Exception $e)
        {
            Log::debug($e->getMessage());
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
    *Login user
    *@bodyParam email string required email of user
    *@bodyParam password string required password of the user
    */
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
     /**
    *Send top up to reset password
    *@bodyParam email string required email of user
    */
    public function sendTopUp(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'email'=>'required|email'
        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),400);
        }

        $user=User::where('email',$request->email)->first();
        if(!$user)
        {
            return $this->errorResponse('User not found',400);
        }

        try {
            $code=substr(rand(25650,985986),0,4);
            $user->setAttribute('topup',$code);

            try {
                Mail::to($user->email)->send(new SendTopup($user));
            } catch (\Throwable $th) {
                return $this->errorResponse('Can not send mail. Try again',502);
            }

            return $this->successResponse(['topup'=>$code],'Topup sent');

        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
    *Send top up to reset password
    *@bodyParam email string required email of user
    *@bodyParam password string required password min 8 character
    *@bodyParam password_confirmation string required password min 8 character
    */
    public function changePassword(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed'
        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),400);
        }

        $user=User::where('email',$request->email)->first();
        if(!$user)
        {
            return $this->errorResponse('User not found',400);
        }
        $user->password=Hash::make($request->password);

        try {
            $user->update();
            return $this->successResponse([],'Password reset successful');
        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error',500);
        }
    }

}

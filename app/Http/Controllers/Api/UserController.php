<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
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
 * @group User Management
 *
 * APIs for managing users
 */
class UserController extends BaseApiController
{

    protected $storageFolder;
    protected $publicFolder;
    function __construct()
    {
        $this->storageFolder = '/app/public/user/image';
        $this->publicFolder = '/storage/user/image/';
    }
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
    *@bodyParam image image optional country of user optional parameter
    */
    public function signup(Request $request)
    {
        try{
                $validator=Validator::make($request->all(),[
                    'name'=>'required',
                    'username'=>'required|min:3|unique:users',
                    'mobile'=>'required|min:10|max:13|unique:users',
                    'email'=>'required|email|max:255|unique:users',
                    'dob'=>'date_format:Y-m-d',
                    'password'=>'required|min:8|confirmed',

                ]);

                if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

                $input = $request->all();

                $input['password'] = Hash::make($request->password);

                if($request->has('image'))
                {
                    $input['image'] = Helper::upload_image($request->image,$this->storageFolder);
                    $input['image_url'] = \URL::to($this->publicFolder.$input['image']);
                }

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
        }catch(\Exception $th)
        {
            Log::debug($th->getMessage());
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
    *Login user
    *@bodyParam email string required email of user
    *@bodyParam password string required password of the user
    */
    public function login(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required',

            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])) throw new \Exception('Email or password is wrong');
            $user = Auth::user();

            $data['token']=$user->createToken($user->username)->accessToken;
            $data['user']=$user;

            $user->updated_at =  new \DateTime();
            $user->update();

            return $this->successResponse($data,'Login success');

        }
        catch (\Throwable $th)
        {
            Log::debug($th->getMessage());
            return $this->errorResponse($th->getMessage(),500);
        }
    }
     /**
    *Send top up to reset password
    *@bodyParam email string required email of user
    */
    public function sendTopUp(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
                'email'=>'required|email'
            ]);
            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $user=User::where('email',$request->email)->first();

            if(!$user) throw new \Exception('No user found',403);


            $code=substr(rand(25650,985986),0,4);
            $user->setAttribute('topup',$code);

            try {
                Mail::to($user->email)->send(new SendTopup($user));
            } catch (\Throwable $th) {
                return $this->errorResponse('Can not send mail. Try again',502);
            }

            return $this->successResponse(['topup'=>$code],'Topup sent');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
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
        try
        {
            $validator=Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required|min:8|confirmed'
            ]);
            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $user=User::where('email',$request->email)->first();
            if(!$user) throw new \Exception('User not found',404);

            $user->password=Hash::make($request->password);

            $user->update();
            return $this->successResponse([],'Password reset successful');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
    *Update profile
    *@urlParam user_id required user id to update the user
    *@bodyParam name string optional full name of user
    *@bodyParam mobile string optional a unique 10 digits mobile number of user
    *@bodyParam dob string optional date of birth of user
    *@bodyParam country string optional country of user optional parameter
    *@bodyParam image optional image of the user
    */
    public function updateProfile(Request $request,int $user_id)
    {
        try {

            if(!$user = User::find($user_id)) throw new \Exception('Not user is found');
            $validator=Validator::make($request->all(),[
                'mobile'=>'min:10|max:13',
                'email'=>'|email|max:255|unique:users',
                'dob'=>'date_format:Y-m-d',
                'image' =>'mimes:png,jpg,jpeg'
            ]);

            if($request->has('username')) throw new \Exception('Username can not be changed');

            if($request->has('email')) throw new \Exception('Email can not be changed');

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $input = $request->all();

            if($request->has('image'))
            {
                $input['image']=Helper::upload_image($request->image,$this->storageFolder);
                $input['image_url']=\URL::to($this->publicFolder.$input['image']);

                if($user->image)
                {
                    Helper::delete_image($user->image,$this->storageFolder);
                }
            }

            $user->update($input);

            return $this->successResponse(['user'=>$user],'Profile updated');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }


     /**
    *Profile Detail
    *@urlParam user_id required user id for profile detail
    */
    public function getProfile(int $user_id)
    {
        try {

            if(!$user = User::find($user_id)) throw new \Exception('Not user is found');

            return $this->successResponse(['user'=>$user],'profile detail');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginAll(){
        return view('auth.layout.login');
    }

    public function  login(LoginRequest $request){
        $request->validated($request->all());

        if(!Auth::attempt($request->only(['email' , 'password']))){
            $notification = array(
                'message' => 'Login Failed, Credentials do not match',
                'alert-type' => 'danger'
            );

            return back()->with($notification);
        }

        $user = User::where('email' , $request->email)->where('status_users' , 'user')->first();

        if($user){
            $token = $user->createToken('API Token of ' . $user->email)->plainTextToken;

            User::where('email', $user->email)->update(['remember_token' => $token]);

            $notification = array(
                'message' => 'Login Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('home.all')->with($notification);
        } elseif (is_null($user)){

            if(method_exists(auth('sanctum')->user()->getRememberToken(), 'delete')) {
                auth('sanctum')->user()->getRememberToken()->delete();
            }

            auth()->guard('web')->logout();

            $notification = array(
                'message' => 'You not our users',
                'alert-type' => 'danger'
            );

            return redirect()->route('login.all')->with($notification);
        }

    }

    public function registerAll(){
        return view('auth.layout.register');
    }

    public function register(RegisterRequest $request){

        $request->validated($request->all());

        $username = $request->username;
        $email = $request->email;

        $checkAll = User::query()->where('email' , '=' , $email)->where('username' , '=' , $username)->first();
        $checkEmail = User::query()->where('email' , '=' , $email)->first();
        $checkUsername = User::query()->where('username' , '=' , $username)->first();

        if ($checkEmail){
            $notification = array(
                'message' => 'Register Failed',
                'alert-type' => "danger"
            );

            return redirect()->route('register.all')->with($notification);
        }

        if ($checkUsername){
            $notification = array(
                'message' => 'Register Failed',
                'alert-type' => "danger"
            );

            return redirect()->route('register.all')->with($notification);
        }

        if (is_null($checkAll)){
            $user = User::query()->create([
                'username' => $username,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $email,
                'password' => Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'status_users' => 'user',
            ]);
//
//            Balance::query()->where('user_id', '=', $user->id)->create([
//                'user_id' => $user->id,
//                'created_at' => \Carbon\Carbon::now(),
//                'updated_at' => Carbon::now()
//            ]);

            $notification = array(
                'message' => 'Register Successfully',
                'alert-type' => "success"
            );

//        event(new Registered($user));
            return redirect()->route('login.all')->with($notification);
        }

    }

    public static function logout()
    {

        if(method_exists(auth('sanctum')->user()->getRememberToken(), 'delete')) {
            auth('sanctum')->user()->getRememberToken()->delete();
        }

        auth()->guard('web')->logout();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home.all')->with($notification);
    }


}

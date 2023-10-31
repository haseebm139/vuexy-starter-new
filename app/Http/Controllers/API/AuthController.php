<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Artisan;
use App\Mail\OrderShipped;
use App\Models\Notification;
use App\Models\NotificationRead;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Laravel\Passport\Passport;
use Hash;
use App\Mail\ResetPasswordEmail;
use Mail;
use Illuminate\Validation\ValidationException;
use Carbon;
class AuthController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        try {
            if($request->hasFile('profile'))
            {
                $img = Str::random(20).$request->file('profile')->getClientOriginalName();
                $input['profile'] = $img;
                $request->profile->move(public_path("documents/profile"), $img);
            }else{
                $input['profile'] = 'documents/profile/default.png';
            }
            $input = $request->except(['confirm_password','password','first_name','last_name'],$request->all());
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $input['name'] =   $first_name .' '.$last_name;
            $input['password'] = Hash::make($request->password);
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  Str::upper($user->name);

            return $this->sendResponse($success, 'User register successfully.');
            # code...
        } catch (\Throwable $e) {
            return $this->sendError('SomeThing went wrong.');
        }

    }


    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        try {
            //code...
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->accessToken;

                $success['name'] =  Str::upper($user->name) ;

                return $this->sendResponse($success, 'User login successfully.');
            }
            else{
                return $this->sendError('Unauthorized.');
            }
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

     /**
     * Update Profile api
     *
     * @return \Illuminate\Http\Response
     */

    public function updateProfile(Request $request){

        try {
            $input =[];
            $user = User::find(auth()->id());
            if ($request->name) {
                $input['name'] = $request->name;
            }if ($request->phone_number) {
                $input['phone_number'] = $request->phone_number;
            }if ($request->lat) {
                $input['lat'] = $request->lat;
            }if ($request->long) {
                $input['long'] = $request->long;
            }if ($request->address) {
                $input['address'] = $request->address;
            }if ($request->city) {
                $input['city'] = $request->city;
            }if ($request->state) {
                $input['state'] = $request->state;
            }if ($request->	zipcode) {
                $input['zipcode'] = $request->zipcode;
            }if ($request->postal_code) {
                $input['postal_code'] = $request->postal_code;
            }if ($request->complete_address) {
                $input['complete_address'] = $request->complete_address;
            }
            return $this->sendResponse($data = [], 'User Update successfully.');
        } catch (\Throwable $e) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    /**
     * Forget Password
     *
     * @return \Illuminate\Http\Response
     */
    public function forgetPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',

        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        $user = User::where('email', $request->email)->first();
        $token = mt_rand(1000, 9999);
        $user->password_reset_token = $token;
        $user->password_reset_token_expires_at = now()->addMinutes(60);
        $user->save();

        // Send the password reset email to the user
        Mail::to($user->email)->send(new ResetPasswordEmail($user));

        $success['email'] =  $user->email;
        $success['code'] =   $user->password_reset_token;
        return $this->sendResponse($success, 'Password reset email sent');
    }

public function updateForgetPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        $user = User::where('email', $request->email)
        ->first();
        $user->password = Hash::make($request->password);
        $user->password_reset_token = null;
        $user->password_reset_token_expires_at = null;
        $user->save();
        $success = [];
        return $this->sendResponse($success, 'Password Changed Successfully');

    }


    public function clearCache()
    {

        try {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('config:cache');
            // Additional cache clearing commands can be added here if needed

            return "Cache cleared successfully.";
        } catch (\Exception $e) {
            return "Cache clearing failed: " . $e->getMessage();
        }
    }


}

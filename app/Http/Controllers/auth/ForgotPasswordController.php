<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\User; 
use Carbon\Carbon; 
use DB; 
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail; 
use RealRashid\SweetAlert\Facades\Alert;
// use Twilio\Rest\Client;

class ForgotPasswordController extends Controller
{
    public function showForgotPassForm()
    {
        return view('auth.forgot_password');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'login' => 'required',
        ]);

        $login = $request->input('login');
        $remember_token = Str::random(64);
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } else {
            $field = 'mobile_no';
            
        }
        $user = User::where($field, $login)->first();
        if($user)
        {
            
            $user->remember_token = Str::random(64);
            $user->save(); 
            

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            Alert::success('We have e-mailed your password reset link!');

            return redirect()->back();
        }
        else
        {
            $this->sendSMS($login, "Your password reset token is: $remember_token");
            Alert::success('We have code your password reset link!');
        }
        Alert::error('Error', 'No user found with this email or mobile number!');
        return redirect()->back();
    }

    // private function sendSMS($to, $message)
    // {
    //     // Twilio credentials from .env
    //     $sid = env('TWILIO_SID');
    //     $token = env('TWILIO_AUTH_TOKEN');
    //     $twilio_number = env('TWILIO_PHONE_NUMBER');

    //     $client = new Client($sid, $remember_token);
        
    //     $client->messages->create(
    //         $to, // Recipient's phone number
    //         [
    //             'from' => $twilio_number, // Twilio phone number
    //             'body' => $message
    //         ]
    //     );
    // }
    public function showResetPasswordForm($token) { 
        
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){
            $data['user'] = $user;
            return view('auth.forgetPasswordLink',$data);
        }
        else{
            abort(404);
        }     
    }

    public function submitResetPasswordForm(Request $request, $token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            if ($request->password == $request->confirm_password) 
            {
                $user->password = Hash::make($request->password);

                if (empty($user->email_verified_at))
                {
                     $user->email_verified_at = Carbon::now();
                }
               
                $user->remember_token = Str::random(64);
                $user->save(); 

                Alert::success('Password successfully reset');

                 return redirect('login');
            }
            else
            {
                Alert::error('Error', 'Password and Confirm password does not match.');
                return redirect()->back();
            }    
        }
        else{
            abort(404);
        } 
    }
}
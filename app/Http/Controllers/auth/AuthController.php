<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.register');
    }

    public function InsertRegistration(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'is_role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $user_model = new User();

        if (!$user_model)
        {
            return redirect()->back()->with('error', value: 'User  not found!');
        }

        $user_model->is_role = trim(string: $request->is_role);
        $user_model->name = trim($request->name);
        $user_model->email = trim($request->email);
        $user_model->mobile_no = $request->mobile_no;
        $user_model->password = Hash::make($request->password);
        $user_model->remember_token = Str::random(50);

        $user_model->save();

        if ($user_model)
        {
            $user_profile_obj = new UserProfile();
            $user_profile_obj->user_id = $user_model->id;
            $user_profile_obj->save();
        }
        else
        {
            return redirect()->back()->with('error', value: 'User  not found!');
        }

        Alert::success(title: 'Registration  Successfully Done!');

        return redirect()->back()->withInput();
    }

    public function login()
    {
        return view('auth.login');
    }

    public function InsertLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            Alert::error('Validation Error!', implode('<br>', $errors));
            return redirect()->back()->withInput();
        }

        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile_no';

        $credentials = [
            $loginField => $request->input('login'),
            'password' => $request->input('password'),
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            switch (Auth::user()->is_role) {
                case 'admin':
                    return redirect()->intended('dashboard/admin');
                case 'user':
                    return redirect()->intended('dashboard/user');
                case 'stuff':
                    return redirect()->intended('dashboard/stuff');
                default:
                    return redirect()->back()->withErrors([
                        'login' => 'The provided credentials do not match our records.',
                    ])->withInput();
            }
        }

        Alert::success(title: 'Login  Successfully Done!');

        return redirect()->back()->withInput();

    }

}
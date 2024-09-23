<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
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
            $role = Auth::user()->is_role;
            Alert::success('Login Successful!', "Welcome back, {$role}!");
            return redirect()->route('dashboard');
        }

        Alert::error('Login Failed', 'Invalid credentials. Please try again.');
        return redirect()->back()->withInput();
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Validator;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle the registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = $this->create($request->all());

        Auth::login($user);

        return redirect()->route( 'auth.login');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // Create and return a validator instance
        return Validator::make($data, [
            'is_role' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'mobile_no' => ['required', 'string', 'unique:users', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required',
            'string',
            'min:8',             
            'regex:/[a-z]/',     
            'regex:/[A-Z]/',      
            'regex:/[0-9]/',      
            'regex:/[@$!%*#?&]/',],
            'confirm_password' => ['required_with:password', 'same:password', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     // Create the user with the validated data
    //     return User::create([
    //         'is_role' => $data['is_role'],
    //         'name' => $data['name'],
    //         'mobile_no' => $data['mobile_no'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'remember_token' => Str::random(50),
    //     ]);
    // }
    protected function create(array $data)
    {
        return User::firstOrCreate(
            // ['email' => $data['email']], 
            ['mobile_no' => $data['mobile_no']], 
            [
                'is_role' => $data['is_role'],
                'name' => $data['name'],
                // 'mobile_no' => $data['mobile_no'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'remember_token' => Str::random(50),
            ]
        );
    }
}
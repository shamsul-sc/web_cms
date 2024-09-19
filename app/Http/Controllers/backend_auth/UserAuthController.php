<?php

namespace App\Http\Controllers\backend_auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function UserList()
    {
        $data['getUser'] = User::getUser();
        return view('user_auth.user_list',$data);
    }

    public function UserDetails()
    {
        $data['getUserProfile'] = User::getUserProfile();
        return view('dashboard.user.user_profile',$data);
    }

    public function UserProfileEdit()
    {

        return view('dashboard.user.user_profile_edit');
    }
}
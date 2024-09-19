<?php

namespace App\Http\Controllers\backend_auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function UserList()
    {
        $data['getUser'] = User::select('users.*')->orderBy('users.id', 'desc')->get();
        return view('user_auth.user_list',$data);
    }
}
<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class WebMemberController extends Controller
{
    public function member(Request $request)
    {
        $search = $request->input('search');

        $query = UserProfile::join('users', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.status', 'enabled')
            ->orderBy('user_profiles.id', 'desc');

        if ($search) {
            $query->where('users.name', 'like', '%' . $search . '%');
        }

        $data['getUserProfile'] = $query->paginate(10);
        $data['getUser'] = User::getUser();

        return view('pages.members', $data);
    }

}

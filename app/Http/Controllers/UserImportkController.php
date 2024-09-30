<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserImportkController extends Controller
{
    public function userImport()
    {
        return view('user_auth.users_import');
    }
}

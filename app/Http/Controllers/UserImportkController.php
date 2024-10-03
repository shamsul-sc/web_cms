<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;


class UserImportkController extends Controller
{
    public function showUserImport()
    {
        return view('user_auth.users_import');
    }

    public function userImport(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $file = $request->file('file');

        Excel::import(new UsersImport, $file);

        Alert::success(title: 'Excel file processed successfully!');

        return redirect('users'); 

    }


}

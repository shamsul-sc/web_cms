<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use RealRashid\SweetAlert\Facades\Alert;

class UsersImport implements WithHeadingRow,ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $validator = Validator::make($row->toArray(), [
                'name' => 'required|string|max:255',
                'mobile_no' => [
                    'required',
                    'string',
                    'max:15',
                    Rule::unique('users', 'mobile_no'),
                ],
                // 'password' => 'required|string|min:8',
                'password' => ['required',
                    'string',
                    'min:8',             
                    'regex:/[a-z]/',     
                    'regex:/[A-Z]/',      
                    'regex:/[0-9]/',      
                    'regex:/[@$!%*#?&]/',],
            ]);
            
            if (!isset($row['name']) || !isset($row['email']) || !isset($row['mobile_no'])) {
                
                continue;
            }
            $user = User::create([
                'name' => $row['name'],
                'mobile_no' => $row['mobile_no'],
                'email' => $row['email'],
                'password' => Hash::make($row['email']),
                'is_role' => $row['is_role'],
            ]);
            
            UserProfile::create([
                'user_id' => $user->id,
                'father_name' => $row['father_name'],
                'mother_name' => $row['mother_name'],
                'blood_group' => $row['blood_group'],
                'present_address' => $row['present_address'],
                'nid_number' => $row['nid_number'],
                'gender' => $row['gender'],
                'date_of_birth' => $row['date_of_birth'],
            ]);
        }
    }
}

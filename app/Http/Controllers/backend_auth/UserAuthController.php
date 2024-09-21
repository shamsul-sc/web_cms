<?php

namespace App\Http\Controllers\backend_auth;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use Carbon\Carbon;

class UserAuthController extends Controller
{
    public function UserList()
    {
        $data['getUser'] = User::getUser();
        return view('user_auth.user_list',$data);
    }

    public function UserDetails($id)
    {
        $user = User::find($id);

        if (!$user)
        {
            return redirect()->back()->with('error', 'User not found!');
        }
        $userProfile = UserProfile::where('user_id', $id)->first();

        $data['getUser'] = $user;
        $data['getUserProfile'] = $userProfile;

        return view('dashboard.user.user_profile',$data);
    }

    public function UserProfileEdit($id)
    {
        $user = User::find($id);

        if (!$user)
        {
            return redirect()->back()->with('error', 'User not found!');
        }
        $userProfile = UserProfile::where('user_id', $id)->first();

        $data['getUser'] = $user;
        $data['getUserProfile'] = $userProfile;
        return view('dashboard.user.user_profile_edit',$data);
    }

    public function UserProfileUpdated(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile_no' => 'required|unique:users,mobile_no,' . $id,

        ]);

        if ($validator->fails())
        {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));
            return redirect()->back()->withInput();
        }

        $user_model = User::find($id);

        if (!$user_model)
        {
            return redirect()->back()->with('error', value: 'User  not found!');
        }

        $user_model->name = trim($request->name);
        $user_model->email = trim($request->email);
        $user_model->mobile_no = $request->mobile_no;

        $user_model->save();

        $user_profile_obj = UserProfile::where('user_id', $id)->first();
        dd($user_profile_obj);

        if ($user_profile_obj)
        {

            $user_profile_obj->nid_number = $request->input('nid_number', $user_profile_obj->nid_number);
            $user_profile_obj->father_name = $request->input('father_name', $user_profile_obj->father_name);
            $user_profile_obj->mother_name = $request->input('mother_name', $user_profile_obj->mother_name);
            $user_profile_obj->blood_group = $request->input('blood_group', $user_profile_obj->blood_group);
            $user_profile_obj->gender = $request->input('gender', $user_profile_obj->gender);
            $user_profile_obj->present_address = $request->input('present_address', $user_profile_obj->present_address);
            $user_profile_obj->date_of_birth = $request->input('date_of_birth', $user_profile_obj->date_of_birth);


            if($request->hasFile('profile_image'))
            {
                $profile_image = $request->file('profile_image');
                $filename = time().'_'.$profile_image->getClientOriginalName();

                $profile_image->move(public_path('uploads/profile_image/original'), $filename);
                $image_resize = Image::read(public_path('uploads/profile_image/original/'.$filename));
                $image_resize->resize(600, 440, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image_resize->save(public_path('uploads/profile_image/thumbnail/'.$filename));


                if ($user_profile_obj->profile_image && file_exists(public_path('uploads/profile_image/original/'.$user_profile_obj->profile_image))) {
                    unlink(public_path('uploads/profile_image/original/'.$user_profile_obj->profile_image));
                    unlink(public_path('uploads/profile_image/thumbnail/'.$user_profile_obj->profile_image));
                }


                $user_profile_obj->profile_image = $filename;
            }

            $user_profile_obj->save();
        }
        else
        {
            return redirect()->back()->with('error', 'User profile not found!');
        }

        Alert::success('Updated Successfully Done!');
        return redirect()->route('backend_auth.user_list');
    }

}
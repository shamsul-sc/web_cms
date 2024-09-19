<?php

namespace App\Http\Controllers;

use App\Models\MemberType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class MemberTypeController extends Controller
{
    public function MemberType_list()
    {
        $data['getMemberType'] = MemberType::getMemberType();
        return view('dashboard.member_type.member_list',$data);
    }

    public function MemberType_add()
    {
        return view('dashboard.member_type.member_add');
    }

    public function MemberType_insert(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'member_type' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $member_model = new MemberType();

        $member_model->member_type    = trim($request->member_type);
        $member_model->serial         = $request->serial;
        $member_model->status         = trim($request->status);
        $member_model->save();

        Alert::success(title: 'Member Type Created Successfully!');

        return redirect()->route('dashboard.member_type_list');
    }

    public function MemberType_edit($id)
    {
        $data['getRecord'] = MemberType::getSingle($id);
        return view('dashboard.member_type.member_edit',$data);
    }

    public function MemberType_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'member_type' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $member_model = MemberType::getSingle($id);;

        if (!$member_model) {
            return redirect()->back()->with('error', value: 'Member type not found!');
        }

        $member_model->member_type    = trim($request->member_type);
        $member_model->serial         = $request->serial;
        $member_model->status         = trim($request->status);
        $member_model->save();



        Alert::success(title: 'Member Type Updated Successfully!');

        return redirect()->route('dashboard.member_type_list');
    }

    public function MemberType_deleted($id)
    {
        $member_model = MemberType::getSingle($id);
        $member_model->status = 'hide';
        $member_model->save();

        Alert::success('Member type successfully deleted.');

        return redirect()->back();

    }
}

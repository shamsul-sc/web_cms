<?php

namespace App\Http\Controllers;

use App\Models\FollowUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class FollowUpController extends Controller
{
    public function FollowUp_list()
    {
        $data['getFollowUp'] = FollowUp::getFollowUp();
        return view('dashboard.follow_up.list',$data);
    }

    public function FollowUp_add()
    {
        return view('dashboard.follow_up.add');
    }

    public function FollowUp_insert(Request $request)

    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'follow_up_title_bn' => 'required|string|max:100',
            'follow_up_title' => 'required|string|max:100',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $followUp_model = new FollowUp();

        $followUp_model->case_id = $request->get('case_id');
        $followUp_model->follow_up_date = $request->get('follow_up_date');
        $followUp_model->follow_up_title_bn = trim($request->get('follow_up_title_bn'));
        $followUp_model->follow_up_title = trim($request->get('follow_up_title'));
        $followUp_model->details_bn = trim($request->get('details_bn'));
        $followUp_model->details = trim($request->get('details'));
        $followUp_model->status = trim($request->get('status'));

        if ($request->hasFile('follow_up_image'))
        {
            $follow_up_image = $request->file('follow_up_image');
            $filename = time() . '_' . $follow_up_image->getClientOriginalName();
            $follow_up_image->move(public_path('uploads/follow_up_image').'/original/', $filename);

            $image_resize = Image::read(public_path('uploads/follow_up_image').'/original/' . $filename);
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/follow_up_image').'/thumbnail/' . $filename);

            if ($followUp_model->follow_up_image && file_exists(public_path('uploads/follow_up_image/original/'.$followUp_model->follow_up_image))) {
                unlink(public_path('uploads/follow_up_image/original/'.$followUp_model->follow_up_image));
                unlink(public_path('uploads/follow_up_image/thumbnail/'.$followUp_model->follow_up_image));
            }
            $followUp_model->follow_up_image = $filename;
        }
        $followUp_model->save();
        return redirect('dashboard/follow_up_list')->with('success', 'Follow Up Created Successfully!');
    }

     public function FollowUp_edit($id)
    {

        $data['getFollowUp'] = FollowUp::getSingle($id);
        return view('dashboard.follow_up.edit', $data);
    }

    public function FollowUp_update(Request $request, $id)
    {
        $followUp_model = FollowUp::getSingle($id);

        if (!$followUp_model)
        {
            return redirect()->back()->with('error', 'Follow Up not found!');
        }

        $followUp_model->case_id = $request->get('case_id');
        $followUp_model->follow_up_date = $request->get('follow_up_date');
        $followUp_model->follow_up_title_bn = trim($request->get('follow_up_title_bn'));
        $followUp_model->follow_up_title = trim($request->get('follow_up_title'));
        $followUp_model->details_bn = trim($request->get('details_bn'));
        $followUp_model->details = trim($request->get('details'));
        $followUp_model->status = trim($request->get('status'));

        if ($request->hasFile('follow_up_image'))
        {
            $follow_up_image = $request->file('follow_up_image');
            $filename = time() . '_' . $follow_up_image->getClientOriginalName();
            $follow_up_image->move(public_path('uploads/follow_up_image').'/original/', $filename);

            $image_resize = Image::read(public_path('uploads/follow_up_image').'/original/' . $filename);
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/follow_up_image').'/thumbnail/' . $filename);
            $followUp_model->follow_up_image = $filename;
        }

        $followUp_model->save();
        return redirect('dashboard/follow_up_list')->with('success', 'Follow Up Updated Successfully!');
    }

    public function FollowUp_deleted($id)
    {
        $followUp_model = FollowUp::getSingle($id);
        $followUp_model->status = 'hide';
        $followUp_model->save();

        return redirect()->back()->with('success', "Follow Up successfully deleted.");
    }
}
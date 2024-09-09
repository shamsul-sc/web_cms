<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryTypeController extends Controller
{
    public function GalleryType_list()
    {
        $data['getGalleryType'] = GalleryType::getGalleryType();
        return view('dashboard.gallery_type.list',$data);
    }

    public function GalleryType_add()
    {
        return view('dashboard.gallery_type.add');
    }

    public function GalleryType_insert(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'type_name' => 'required',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $gallery_type_model = new GalleryType();
        $gallery_type_model->type_name    = trim($request->type_name);
        $gallery_type_model->type_serial  = $request->type_serial;
        $gallery_type_model->type_status  = $request->type_status;

        $gallery_type_model->save();

        return redirect('dashboard/gallery_type_list')->with('success', 'Gallery Type Created Successfully!');
    }

    public function GalleryType_edit($id)
    {
        $data['getRecord'] = GalleryType::getSingle($id);
        return view('dashboard.gallery_type.edit',$data );

    }

    public function GalleryType_update(Request $request,$id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'type_name' => 'required',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $gallery_type_model = GalleryType::getSingle($id);

        if (!$gallery_type_model) {
            return redirect()->back()->with('error', 'Gallery not found!');
        }

        $gallery_type_model->type_name    = trim($request->type_name);
        $gallery_type_model->type_serial  = $request->type_serial;
        $gallery_type_model->type_status  = $request->type_status;

        $gallery_type_model->save();

        return redirect('dashboard/gallery_type_list')->with('success', 'Gallery Type Updated Successfully!');
    }

    public function GalleryType_deleted($id)
    {
        $gallery_type_model = GalleryType::getSingle($id);
        $gallery_type_model->type_status = 'Hide';
        $gallery_type_model->save();

        return redirect()->back()->with('success', "Category successfully deleted.");
    }
}
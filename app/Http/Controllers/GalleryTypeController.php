<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $gallery_type_model = new GalleryType();
        $gallery_type_model->type_name    = trim($request->type_name);
        $gallery_type_model->type_serial  = $request->type_serial;
        $gallery_type_model->type_status  = $request->type_status;

        $gallery_type_model->save();

        Alert::success(title: 'Gallery Type Created Successfully!');

        return redirect()->route('dashboard.gallery_type_list');

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

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $gallery_type_model = GalleryType::getSingle($id);

        if (!$gallery_type_model) {
            return redirect()->back()->with('error', 'Gallery not found!');
        }

        $gallery_type_model->type_name    = trim($request->type_name);
        $gallery_type_model->type_serial  = $request->type_serial;
        $gallery_type_model->type_status  = $request->type_status;

        $gallery_type_model->save();

        Alert::success(title: 'Gallery Type Updated Successfully!');

        return redirect()->route('dashboard.gallery_type_list');

    }

    public function GalleryType_deleted($id)
    {
        $gallery_type_model = GalleryType::getSingle($id);
        $gallery_type_model->type_status = 'Hide';
        $gallery_type_model->save();

        Alert::success('GalleryType successfully deleted.');

        return redirect()->back();

    }
}
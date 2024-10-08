<?php

namespace App\Http\Controllers;

use App\Models\GalleryPhoto;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryPhotoController extends Controller
{
    public function GalleryPhoto_list()
    {
        $data['getGalleryPhoto'] = GalleryPhoto::getGalleryPhoto();
        // Alert::success('galary list');
        return view('dashboard.gallery_photo.list',$data);
    }

    public function GalleryPhoto_add()
    {
        $data['albums'] = GalleryAlbum::where('album_status', 'Show')->orderBy('album_serial')->get();
        return view('dashboard.gallery_photo.add', $data);
    }


    public function GalleryPhoto_insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            'image'   => 'required|array',
            'image.*' => 'image|mimes:png,jpg,jpeg,webp|max:5120',
            'serial' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            Alert::error('Validation Error!', implode('<br>', $errors));
            return redirect()->back()->withInput();
        }

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/gallery_photo').'/original/', $filename);

                $image_resize = Image::read(public_path('uploads/gallery_photo').'/original/'.$filename);
                $image_resize->resize(600, 340, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image_resize->save(public_path('uploads/gallery_photo').'/thumbnail/'.$filename);

                $gallery_photo_model = new GalleryPhoto();
                $gallery_photo_model->album_id = $request->input('album_id'); 
                $gallery_photo_model->serial = $request->input('serial');   
                $gallery_photo_model->caption = $request->input('caption');   
                $gallery_photo_model->image = $filename;
                $gallery_photo_model->status = $request->input('status');

                $gallery_photo_model->save();
            }
        } else {
            
            Alert::error('No file selected!', 'Please upload at least one image.');
            return redirect()->back()->withInput();
        }

        Alert::success('Success', 'Gallery Photo Created Successfully!');
        return redirect()->route('dashboard.gallery_photo_list');
    }


    public function GalleryPhoto_edit($id)
    {
        $data['albums'] = GalleryAlbum::where('album_status', 'Show')->orderBy('album_serial')->get();
        $data['getRecord'] = GalleryPhoto::getSingle($id);
        // Alert::success('update form');
        return view('dashboard.gallery_photo.edit', $data);
    }

    public function GalleryPhoto_update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $gallery_photo_model = GalleryPhoto::getSingle($id);

        if (!$gallery_photo_model) {
            return redirect()->back()->with('error', 'Gallery not found!');
        }


        $gallery_photo_model->album_id = $request->album_id;
        $gallery_photo_model->caption = trim($request->caption);
        $gallery_photo_model->serial = $request->serial;
        $gallery_photo_model->status = $request->status;


        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();


            $image->move(public_path('uploads/gallery_photo/original'), $filename);


            $image_resize = Image::read(public_path('uploads/gallery_photo/original/'.$filename));
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/gallery_photo/thumbnail/'.$filename));


            if ($gallery_photo_model->image && file_exists(public_path('uploads/gallery_photo/original/'.$gallery_photo_model->image))) {
                unlink(public_path('uploads/gallery_photo/original/'.$gallery_photo_model->image));
                unlink(public_path('uploads/gallery_photo/thumbnail/'.$gallery_photo_model->image));
            }


            $gallery_photo_model->image = $filename;
        }


        $gallery_photo_model->save();

        Alert::success('Gallery Photo Updated Successfully!');

        return redirect()->route('dashboard.gallery_photo_list');

    }


    public function GalleryPhoto_deleted($id)
    {
        $gallery_photo_model = GalleryPhoto::getSingle($id);
        $gallery_photo_model->status = 'Hide';
        $gallery_photo_model->save();

        return redirect()->back()->with('success', "Gallery Photo successfully deleted.");
    }
}
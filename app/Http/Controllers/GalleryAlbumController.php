<?php

namespace App\Http\Controllers;

use App\Models\GalleryAlbum;
use App\Models\GalleryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryAlbumController extends Controller
{
    public function GalleryAlbum_list()
    {
        $data['getGalleryAlbum'] = GalleryAlbum::getGalleryAlbum();
        return view('dashboard.gallery_album.list', $data);
    }

    public function GalleryAlbum_add()
    {
        $data['galleryTypes'] = GalleryType::where('type_status', 'Show')->orderBy('type_serial')->get();
        return view('dashboard.gallery_album.add', $data);
    }

    public function GalleryAlbum_insert(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'album_name' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $gallery_album_model = new GalleryAlbum();

        $gallery_album_model->type_id = $request->type_id;
        $gallery_album_model->album_name    = trim($request->album_name);
        $gallery_album_model->date    = $request->date;
        $gallery_album_model->venue    = trim($request->venue);
        $gallery_album_model->album_serial  = $request->album_serial;
        $gallery_album_model->album_status  = $request->album_status;

        if($request->featured_image)
        {
            $featured_image   = $request->file('featured_image');
            $filename         = time().'_'.$featured_image->getClientOriginalName();
            //echo $filename; exit();
            $featured_image->move(public_path('uploads/gallery_Album_photo').'/original/',$filename);

            $image_resize = Image::read(public_path('uploads/gallery_Album_photo').'/original/'.$filename);
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/gallery_Album_photo').'/thumbnail/'.$filename);
            $gallery_album_model->featured_image = $filename;

        }
        else
        {
            $gallery_album_model->featured_image = null;
        }

        $gallery_album_model->save();

        Alert::success(title: 'Gallery Album Created Successfully!');

        return redirect()->route('dashboard.gallery_album_list');

    }

    public function GalleryAlbum_edit($id)
    {

        $data['getRecord'] = GalleryAlbum::getSingle($id);
        return view('dashboard.gallery_album.edit',$data);
    }

     public function GalleryAlbum_update(Request $request,$id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'album_name' => 'required',
            // 'featured_image' => 'nullable|featured_image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }
        
        $gallery_album_model = GalleryAlbum::getSingle($id);

        if (!$gallery_album_model) {
            return redirect()->back()->with('error', 'Gallery not found!');
        }

        $gallery_album_model->type_id = $request->type_id;
        $gallery_album_model->album_name    = trim($request->album_name);
        $gallery_album_model->date    = $request->date;
        $gallery_album_model->venue    = trim($request->venue);
        $gallery_album_model->album_serial  = $request->album_serial;
        $gallery_album_model->album_status  = $request->album_status;

        if($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $filename = time().'_'.$featured_image->getClientOriginalName();


            $featured_image->move(public_path('uploads/gallery_Album_photo/original'), $filename);

            $image_resize = Image::read(public_path('uploads/gallery_Album_photo/original/'.$filename));

            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            
            $image_resize->save(public_path('uploads/gallery_Album_photo/thumbnail/'.$filename));


            if ($gallery_album_model->featured_image && file_exists(public_path('uploads/gallery_Album_photo/original/'.$gallery_album_model->featured_image))) {
                unlink(public_path('uploads/gallery_Album_photo/original/'.$gallery_album_model->featured_image));
                unlink(public_path('uploads/gallery_Album_photo/thumbnail/'.$gallery_album_model->featured_image));
            }


            $gallery_album_model->featured_image = $filename;
        }

        $gallery_album_model->save();

        Alert::success(title: 'Gallery Album Updated Successfully!');

        return redirect()->route('dashboard.gallery_album_list');

    }



    public function GalleryAlbum_deleted($id)
    {
        $gallery_album_model = GalleryAlbum::getSingle($id);
        $gallery_album_model->album_status = 'Hide';
        $gallery_album_model->save();

        Alert::success('Gallery Album successfully deleted.');

        return redirect()->back();

    }
}
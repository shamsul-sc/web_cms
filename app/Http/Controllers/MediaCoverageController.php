<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaCoverage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class MediaCoverageController extends Controller
{
    public function MediaCoverage_list()
    {
        $data['getMedia'] = MediaCoverage::getMedia();
        return view('dashboard.media.Media_list',$data);
    }

    public function MediaCoverage_add()
    {
        return view('dashboard.media.Media_add');
    }

    public function MediaCoverage_insert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'media_name' => 'required',
            'main_image_title' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }


        $mediaCoverage_model = new MediaCoverage();
        $mediaCoverage_model->media_name = trim($request->media_name);
        $mediaCoverage_model->main_image_title = trim($request->main_image_title);
        $mediaCoverage_model->coverage_title = trim($request->coverage_title);
        $mediaCoverage_model->url = trim($request->url);
        $mediaCoverage_model->coverage_text = trim($request->coverage_text);
        $mediaCoverage_model->summary = trim($request->summary);
        $mediaCoverage_model->youtube_video_link = trim($request->youtube_video_link);
        $mediaCoverage_model->publish_date = trim($request->publish_date);
        $mediaCoverage_model->full_news_image = $request->input('full_news_image');
        $mediaCoverage_model->status = $request->status;

        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $filename = time() . '_' . $main_image->getClientOriginalName();
            $main_image->move(public_path('uploads/main_image/original/'), $filename);

            $image_resize = Image::read(public_path('uploads/main_image/original/' . $filename));
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/main_image/thumbnail/' . $filename));
            $mediaCoverage_model->main_image = $filename;
        }

        if ($request->hasFile('media_logo')) {
            $media_logo = $request->file('media_logo');
            $filename = time() . '_' . $media_logo->getClientOriginalName();
            $media_logo->move(public_path('uploads/media_logo/'), name: $filename);
            $mediaCoverage_model->media_logo = $filename;
        }

        $mediaCoverage_model->save();

        Alert::success(title: 'Media Coverage Created Successfully!');

        return redirect()->route('dashboard.media_cover_list');

    }

    public function MediaCoverage_edit($id)
    {
        $data['getMedia'] = MediaCoverage::getSingle($id);
        return view('dashboard.media.Media_edit',$data);
    }

    public function MediaCoverage_update(Request $request,$id)
    {

        $validator = Validator::make($request->all(), [
            'media_name' => 'required',
            'main_image_title' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }
        $mediaCoverage_model = MediaCoverage::getSingle($id);

        if (!$mediaCoverage_model)
        {
            return redirect()->back()->with('error', value: 'MediaCoverage not found!');
        }


        $mediaCoverage_model->media_name = trim($request->media_name);
        $mediaCoverage_model->main_image_title = trim($request->main_image_title);
        $mediaCoverage_model->coverage_title = trim($request->coverage_title);
        $mediaCoverage_model->url = trim($request->url);
        $mediaCoverage_model->coverage_text = trim($request->coverage_text);
        $mediaCoverage_model->summary = trim($request->summary);
        $mediaCoverage_model->youtube_video_link = trim($request->youtube_video_link);
        $mediaCoverage_model->publish_date = trim($request->publish_date);
        $mediaCoverage_model->full_news_image = $request->input('full_news_image');
        $mediaCoverage_model->status = $request->status;

        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $filename = time() . '_' . $main_image->getClientOriginalName();
            $main_image->move(public_path('uploads/main_image/original/'), $filename);

            $image_resize = Image::read(public_path('uploads/main_image/original/' . $filename));
            $image_resize->resize(600, 440, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/main_image/thumbnail/' . $filename));

            if ($mediaCoverage_model->main_image && file_exists(public_path('uploads/main_image/original/'.$mediaCoverage_model->main_image))) {
                unlink(public_path('uploads/main_image/original/'.$mediaCoverage_model->main_image));
                unlink(public_path('uploads/main_image/thumbnail/'.$mediaCoverage_model->main_image));
            }

            $mediaCoverage_model->main_image = $filename;
        }


        if ($request->hasFile('media_logo')) {
            $media_logo = $request->file('media_logo');
            $filename = time() . '_' . $media_logo->getClientOriginalName();
            $media_logo->move(public_path('uploads/media_logo/'), name: $filename);

            if ($mediaCoverage_model->media_logo && file_exists(public_path('uploads/media_logo/'.$mediaCoverage_model->media_logo))) {
                unlink(public_path('uploads/media_logo'.$mediaCoverage_model->media_logo));

            }

            $mediaCoverage_model->media_logo = $filename;
        }

        $mediaCoverage_model->save();

         Alert::success(title: 'Media Coverage Updated Successfully!');

        return redirect()->route('dashboard.media_cover_list');

    }

    public function MediaCoverage_deleted($id)
    {
        $mediaCoverage_model = MediaCoverage::getSingle($id);
        $mediaCoverage_model->status = 'Hide';
        $mediaCoverage_model->save();

        Alert::success('MediaCoverage successfully deleted.');

        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;



class ProjectController extends Controller
{
    public function project_list()
    {
        $data['getProject'] = Project::getProject();
        // dd($data['getProject']);
        return view('dashboard.project.list', $data);
    }

    public function project_add()
    {
        $data['getRecord'] = ProjectCategory::getRecord();
        // dd($data['getRecord']); exit;
        $data['getGalleryAlbum'] = GalleryAlbum::getGalleryAlbum();
        return view('dashboard.project.add', $data);
    }

    public function insert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'project_title_bn' => 'required|unique:projects,project_title_bn',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        // return dd($request->all());
        $project_model = new Project();

        $project_model->cat_id          = $request->cat_id;
        $project_model->project_title   = trim($request->project_title);
        $project_model->slug            = trim($request->slug);
        $project_model->project_title_bn = trim($request->project_title_bn);
        $project_model->joint_project   = trim($request->joint_project);
        $project_model->user_id         = $request->user_id;
        $project_model->project_approx_budget = $request->project_approx_budget;
        $project_model->introduction    = trim($request->introduction);
        $project_model->introduction_bn = trim($request->introduction_bn);
        $project_model->details         = trim($request->details);
        $project_model->details_bn      = trim($request->details_bn);
        $project_model->project_summary = trim($request->project_summary);
        $project_model->project_summary_bn = trim($request->project_summary_bn);
        $project_model->youtube_video_link = trim($request->youtube_video_link);
        $project_model->album_id        =$request->album_id;
        $project_model->featured_project = trim($request->featured_project);
        $project_model->state           = trim($request->state);
        $project_model->status          = trim($request->status);
        $project_model->serial          = trim($request->serial);

        if ($request->hasFile('project_image')) {
            $project_image = $request->file('project_image');
            $filename = time() . '_' . $project_image->getClientOriginalName();
            $project_image->move(public_path('uploads/category').'/original/', $filename);

            $image_resize = Image::read(public_path('uploads/category').'/original/' . $filename);
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/category').'/thumbnail/' . $filename);
            $project_model->project_image = $filename;
        }

        if($request->hasFile('project_pdf'))
        {
            $file = $request->file('project_pdf');
            $filename = time() . '.' . $request->file('project_pdf')->extension();
            $filePath = public_path() . 'uploads/project_odf';
            $file->move($filePath, $filename);
        }

        $project_model->save();

        Alert::success('Project Created Successfully!');

        return redirect()->route('dashboard.list');


    }

    public function edit($id)
    {
        $data['getGalleryAlbum'] = GalleryAlbum::getGalleryAlbum();
        $data['categories'] = ProjectCategory::getRecord();
        $data['getRecord'] = Project::getSingle($id);
        // dd($data['getRecord']); exit;
        return view('dashboard.project.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'project_title_bn' => [
                'required',
                Rule::unique('projects')->ignore($id),
            ],
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }


        $project_model = Project::getSingle($id);

        if (!$project_model) {
            return redirect()->back()->with('error', 'Project not found!');
        }

        $project_model->cat_id          = $request->cat_id;
        $project_model->project_title   = trim($request->project_title);
        $project_model->slug            = trim($request->slug);
        $project_model->project_title_bn = trim($request->project_title_bn);
        $project_model->joint_project   = trim($request->joint_project);
        $project_model->user_id         = $request->user_id;
        $project_model->project_approx_budget = $request->project_approx_budget;
        $project_model->introduction    = trim($request->introduction);
        $project_model->introduction_bn = trim($request->introduction_bn);
        $project_model->details         = trim($request->details);
        $project_model->details_bn      = trim($request->details_bn);
        $project_model->project_summary = trim($request->project_summary);
        $project_model->project_summary_bn = trim($request->project_summary_bn);
        $project_model->youtube_video_link = trim($request->youtube_video_link);
        $project_model->album_id        = $request->album_id;
        $project_model->project_pdf     = trim($request->project_pdf);
        $project_model->featured_project = trim($request->featured_project);
        $project_model->state           = trim($request->state);
        $project_model->status          = trim($request->status);
        $project_model->serial          = trim($request->serial);


        if ($request->hasFile('project_image')) {
            $project_image = $request->file('project_image');
            $filename = time() . '_' . $project_image->getClientOriginalName();

            $project_image->move(public_path('uploads/project_image/original/'), $filename);

            $image_resize = Image::read(public_path('uploads/project_image/original/' . $filename));
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/project_image/thumbnail/' . $filename));

            if ($project_model->project_image && file_exists(public_path('uploads/project_image/original/' . $project_model->project_image))) {
                unlink(public_path('uploads/project_image/original/' . $project_model->project_image));
                unlink(public_path('uploads/project_image/thumbnail/' . $project_model->project_image));
            }


            $project_model->project_image = $filename;
        }


        $project_model->save();

        Alert::success('Project Update Successfully!');

        return redirect()->route('dashboard.list');
    }

    public function deleted($id)
    {
        $project = Project::getSingle($id);
        $project->is_delete = 1;
        $project->save();

        Alert::success('Project successfully deleted.');

        return redirect()->back();
    }
}

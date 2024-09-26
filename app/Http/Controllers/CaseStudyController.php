<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\CaseStudy;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class CaseStudyController extends Controller
{
    public function CaseStudy_list()
    {
        $data['getCaseStudy'] = CaseStudy::getCaseStudy();
        return view('dashboard.case_study.list', $data);
    }

    public function CaseStudy_add()
    {
        $data['getAlbum'] = GalleryAlbum::where('album_status', 'Show')->orderBy('id')->get();
        $data['categories'] = ProjectCategory::where('status', 'show')->orderBy('serial')->get();
        $data['projects'] = Project::where('status', 'Show')->orderBy('serial')->get();
        // dd($data['projects']); exit;
        return view('dashboard.case_study.add', $data);
    }

    public function CaseStudy_insert(Request $request)
    {
        // dd($request->all());
        // die();
         $validator = Validator::make($request->all(), [
            'case_title_bn' => 'required|unique:case_studies,case_title_bn'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $case_model = new CaseStudy();

        $case_model->category_id    = $request->category_id;
        $case_model->project_id     = $request->project_id;
        $case_model->case_title_bn  = trim($request->case_title_bn);
        $case_model->case_title     = trim($request->case_title);
        $case_model->introduction_bn = trim($request->introduction_bn);
        $case_model->introduction   = trim($request->introduction);
        $case_model->details_bn     = trim($request->details_bn);
        $case_model->details        = trim($request->details);
        $case_model->case_summary_bn= trim($request->case_summary_bn);
        $case_model->case_summary   = trim($request->case_summary);
        $case_model->case_approx_budget = $request->case_approx_budget;
        $case_model->state          = trim($request->state);
        $case_model->youtube_video_link = trim($request->youtube_video_link);
        $case_model->album_id       = $request->album_id;
        $case_model->urgent_case    = trim($request->urgent_case);
        $case_model->featured_case  = trim($request->featured_case);

        if ($request->hasFile('case_image')) {
            $case_image = $request->file('case_image');
            $filename = time() . '_' . $case_image->getClientOriginalName();
            $case_image->move(public_path('uploads/case_image').'/original/', $filename);

            $image_resize = Image::read(public_path('uploads/case_image').'/original/' . $filename);
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/case_image').'/thumbnail/' . $filename);

            if ($case_model->case_image && file_exists(public_path('uploads/author_image/original/'.$case_model->case_image))) {
                unlink(public_path('uploads/case_image/original/'.$case_model->case_image));
                unlink(public_path('uploads/case_image/thumbnail/'.$case_model->case_image));
            }
            $case_model->case_image = $filename;
        }

        if ($request->hasFile('case_pdf')) {
            $file = $request->file('case_pdf');
            $filename = time() . '.' . $file->extension();
            $filePath = 'uploads/case_pdf';
            $file->move(public_path($filePath), $filename);
            $case_model->case_pdf = $filePath . '/' . $filename;
        }

        $case_model->save();


        Alert::success(title: 'Case Study Created Successfully!');

        return redirect()->route('dashboard.case_study_list');
    }

    public function CaseStudy_edit($id)
    {
        $data['getRecord'] = CaseStudy::getSingle($id);
        $data['getAlbum'] = GalleryAlbum::where('album_status', 'Show')->orderBy('id')->get();
        $data['categories'] = ProjectCategory::where('status', 'show')->orderBy('serial')->get();
        $data['projects'] = Project::where('status', 'Show')->orderBy('serial')->get();
        // dd($data['getRecord']); exit;
        return view('dashboard.case_study.edit', $data);
    }

    public function CaseStudy_update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'case_title_bn' => 'required',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $case_model = CaseStudy::getSingle($id);

        if (!$case_model)
        {
            return redirect()->back()->with('error', 'CaseStudy not found!');
        }

        $case_model->category_id    = $request->category_id;
        $case_model->project_id     = $request->project_id;
        $case_model->case_title_bn  = trim($request->case_title_bn);
        $case_model->case_title     = trim($request->case_title);
        $case_model->introduction_bn = trim($request->introduction_bn);
        $case_model->introduction   = trim($request->introduction);
        $case_model->details_bn     = trim($request->details_bn);
        $case_model->details        = trim($request->details);
        $case_model->case_summary_bn = trim($request->case_summary_bn);
        $case_model->case_summary   = trim($request->case_summary);
        $case_model->case_approx_budget = $request->case_approx_budget;
        $case_model->state          = trim($request->state);
        $case_model->youtube_video_link = trim($request->youtube_video_link);
        $case_model->album_id       = $request->album_id;
        $case_model->urgent_case    = trim($request->urgent_case);
        $case_model->featured_case  = trim($request->featured_case);

         if ($request->hasFile('case_image')) {
            $case_image = $request->file('case_image');
            $filename = time() . '_' . $case_image->getClientOriginalName();
            $case_image->move(public_path('uploads/case_image').'/original/', $filename);

            $image_resize = Image::read(public_path('uploads/case_image').'/original/' . $filename);
            $image_resize->resize(600, 340, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/case_image').'/thumbnail/' . $filename);
            $case_model->case_image = $filename;
        }

        if($request->hasFile('case_pdf'))
        {
            $file = $request->file('case_pdf');
            $filename = time() . '.' . $request->file('case_pdf')->extension();
            $filePath = public_path() . 'uploads/case_pdf';
            $file->move($filePath, $filename);
        }

        $case_model->save();

        Alert::success(title: 'Category Updated Successfully!');

        return redirect()->route('dashboard.case_study_list');

    }

    public function CaseStudy_deleted($id)
    {
        $project = CaseStudy::getSingle($id);
        $project->is_delete = 1;
        $project->save();

        Alert::success('Case Study successfully deleted.');

        return redirect()->back();
    }

}
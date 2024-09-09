<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use App\Models\Project;
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
        $data['projects'] = Project::where('status', 'Show')->orderBy('serial')->get();
        // dd($data['projects']); exit;
        return view('dashboard.case_study.add', $data);
    }

    public function CaseStudy_insert(Request $request)
    {
        // dd($request->all());
        // die();
         $validator = Validator::make($request->all(), [

           
            'case_title_bn' => 'required|unique:case_studies,case_title_bn',
            'case_approx_budget' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }
        // return dd($request->all());
        $case_model = new CaseStudy();

        $case_model->project_id = $request->project_id;
        $case_model->case_title_bn    = trim($request->case_title_bn);
        $case_model->case_title    = trim($request->case_title);
        $case_model->introduction_bn    = trim($request->introduction_bn);
        $case_model->introduction    = trim($request->introduction);
        $case_model->details_bn    = trim($request->details_bn);
        $case_model->details    = trim($request->details);
        $case_model->case_summary_bn    = trim($request->case_summary_bn);
        $case_model->case_summary    = trim($request->case_summary);
        $case_model->case_approx_budget    = $request->case_approx_budget;
        $case_model->state    = trim($request->state);
        $case_model->youtube_video_link    = trim($request->youtube_video_link);
        $case_model->album_id    = $request->album_id;
        $case_model->urgent_case    = trim($request->urgent_case);
        $case_model->featured_case    = trim($request->featured_case);


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

        return redirect('dashboard/case_study_list')->with('success', 'Case Study Created Successfully!');
    }

    public function CaseStudy_edit($id)
    {

        $data['getRecord'] = CaseStudy::getSingle($id);
        $data['projects'] = Project::where('status', 'Show')->orderBy('serial')->get();
        // dd($data['getRecord']); exit;
        return view('dashboard.case_study.edit', $data);
    }

    public function CaseStudy_update(Request $request, $id)
    {

        $case_model = CaseStudy::getSingle($id);

        if (!$case_model)
        {
            return redirect()->back()->with('error', 'CaseStudy not found!');
        }

        $case_model->project_id = $request->project_id;
        $case_model->case_title_bn    = trim($request->case_title_bn);
        $case_model->case_title    = trim($request->case_title);
        $case_model->introduction_bn    = trim($request->introduction_bn);
        $case_model->introduction    = trim($request->introduction);
        $case_model->details_bn    = trim($request->details_bn);
        $case_model->details    = trim($request->details);
        $case_model->case_summary_bn    = trim($request->case_summary_bn);
        $case_model->case_summary    = trim($request->case_summary);
        $case_model->case_approx_budget    = $request->case_approx_budget;
        $case_model->state    = trim($request->state);
        $case_model->youtube_video_link    = trim($request->youtube_video_link);
        $case_model->album_id    = $request->album_id;
        $case_model->urgent_case    = trim($request->urgent_case);
        $case_model->featured_case    = trim($request->featured_case);

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

        return redirect('dashboard/case_study_list')->with('success', 'Case Study Successfully updated!');
    }

    public function CaseStudy_deleted($id)
    {
        $project = CaseStudy::getSingle($id);
        $project->is_delete = 1;
        $project->save();

        return redirect()->back()->with('success', "Case Study successfully deleted.");
    }

}
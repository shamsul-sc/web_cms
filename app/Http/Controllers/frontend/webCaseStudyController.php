<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class WebCaseStudyController extends Controller
{
    public function caseStudies()
    {
        $data['caseStudies'] = CaseStudy::select('case_studies.*', 'project_categories.category_name', 'project_categories.category_name_bn')->join('project_categories', 'project_categories.id', '=', 'case_studies.category_id')->where('case_studies.is_delete', 0)->get();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        // dd($data['caseStudies']); exit;
        return view('pages.caseStudy', $data);
    }

    public function caseStudyDetails($id)
    {
        $data['categories'] = ProjectCategory::getRecord();
        $data['getRecord'] = CaseStudy::where('id', $id)->first();
        $data['title'] = $data['getRecord']->case_title;
        // dd($data['getRecord']); exit;
        return view('pages.caseStudyDetails', $data);
    }
}
<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\Project;
use Illuminate\Http\Request;

class webCaseStudyController extends Controller
{
    public function case_studies()
    {
        $data['caseStudies'] = CaseStudy::where('is_delete', 0)->get();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        // dd($data['projects']); exit;
        return view('pages.caseStudy', $data);
    }
}

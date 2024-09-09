<?php

namespace App\Http\Controllers;
use App\Models\HomeSlider;
use App\Models\ProjectCategory;
use App\Models\CaseStudy;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = HomeSlider::where('status', 'Show')->orderBy('position')->get();
        $data['projectCategories'] = ProjectCategory::getRecord();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        $data['featuredCases'] = CaseStudy::where('featured_case', 'Yes')->get();
        return view('pages.home', $data);
    }
}

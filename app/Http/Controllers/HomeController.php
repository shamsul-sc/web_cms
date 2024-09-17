<?php

namespace App\Http\Controllers;
use App\Models\HomeSlider;
use App\Models\CaseStudy;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = HomeSlider::where('status', 'Show')->orderBy('position')->get();
        $data['testimonials'] = Testimonial::where('status', 'Show')->orderBy('serial')->get();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        $data['featuredCases'] = CaseStudy::select('case_studies.*', 'project_categories.category_name', 'project_categories.category_name_bn')->join('project_categories', 'project_categories.id', '=', 'case_studies.category_id')->where('featured_case', 'Yes')->where('case_studies.is_delete', 0)->get();
        $data['galleryPhotos'] = GalleryPhoto::where('status', 'Show')->orderBy('serial')->get();
        return view('pages.home', $data);
    }
}
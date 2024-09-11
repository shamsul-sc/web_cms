<?php

namespace App\Http\Controllers;
use App\Models\HomeSlider;
use App\Models\CaseStudy;
use App\Models\Project;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = HomeSlider::where('status', 'Show')->orderBy('position')->get();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        $data['featuredCases'] = CaseStudy::where('featured_case', 'Yes')->get();
        $data['galleryPhotos'] = GalleryPhoto::where('status', 'Show')->orderBy('serial')->get();
        return view('pages.home', $data);
    }
}

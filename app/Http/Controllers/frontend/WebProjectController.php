<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use App\Models\Project;
use App\Models\CaseStudy;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class webProjectController extends Controller
{
    public function projectCategories()
    {
        $data['title'] = 'Project Categories';
        $data['selected'] = 'projects';
        $data['sub_selected'] = 'categories';
        $data['categories'] = ProjectCategory::where('status', 'show')->orderBy('serial')->get();
        return view('pages.projectCategories', $data);
    }

    public function categoryCaseStudies($slug)
    {
        $data['title'] = 'Case Studies';
        $data['selected'] = 'case_studies';
        $data['category'] = ProjectCategory::where('slug', $slug)->first();
        $data['caseStudies'] = CaseStudy::join('project_categories', 'project_categories.id', '=', 'case_studies.category_id')->where('category_id', $data['category']->id)->where('project_categories.is_delete', 0)->get();
        $data['featuredProjects'] = Project::where('featured_project', 'Yes')->where('status', 'Show')->orderBy('serial')->get();
        return view('pages.categoryCaseStudies', $data);
    }

    public function projects()
    {
        $data['title'] = 'Projects';
        $data['selected'] = 'projects';
        $data['sub_selected'] = 'projects';
        $data['projects'] = Project::where('status', 'show')->orderBy('serial')->get();
        return view('pages.projects', $data);
    }

    public function jointProjects()
    {
        $data['title'] = 'Joint Projects';
        $data['selected'] = 'projects';
        $data['sub_selected'] = 'joint_projects';
        $data['jointProjects'] = Project::where('joint_project', 'Yes')->where('status', 'show')->orderBy('serial')->get();
        // dd($data['projects']); exit;
        return view('pages.jointProjects', $data);
    }

    public function project($slug)
    {
        $data['getRecord'] = Project::where('slug', $slug)->first();
        $data['title'] = $data['getRecord']->project_title;
        $data['selected'] = 'projects';
        $data['sub_selected'] = 'projects';
        $data['categories'] = ProjectCategory::getRecord();
        $data['galleryPhotos'] = GalleryPhoto::where('status', 'Show')->orderBy('serial')->get();
        return view('pages.projectDetails', $data);
    }
}

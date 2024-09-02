<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;


class ProjectCategoryController extends Controller
{

    public function category_list()
    {
        $data['getRecord'] = ProjectCategory::getRecord();
        return view('dashboard.project_category.category_list',$data );
    }

    public function category_add()
    {
        return view('dashboard.project_category.category_add');
    }

    public function category_insert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_name' => ['required'],
            'category_name_bn' => ['required'],
            'serial' => ['required', 'integer'],
            'slug' => 'required|unique:project_categories',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }
        $category_model = new ProjectCategory();
        $category_model->category_name    = trim($request->category_name);
        $category_model->category_name_bn = trim($request->category_name_bn);
        $category_model->slug             = trim($request->slug);
        $category_model->serial           = (int)trim($request->serial);
        $category_model->status           = trim($request->status);
        $category_model->save();

        return redirect('dashboard/category_list')->with('success', 'Category Created Successfully!');

    }

    public function show(ProjectCategory $projectCategory)
    {
        //
    }

    public function edit(ProjectCategory $projectCategory)
    {
        //
    }


    public function update(Request $request, ProjectCategory $projectCategory)
    {
        //
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        //
    }
}
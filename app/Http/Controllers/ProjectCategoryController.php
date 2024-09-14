<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;


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
            'category_name_bn' => 'required',
            
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $category_model = new ProjectCategory();
        $category_model->category_name    = trim($request->category_name);
        $category_model->category_name_bn = trim($request->category_name_bn);
        $category_model->slug             = trim($request->slug);
        $category_model->serial           = (int)trim($request->serial);
        $category_model->status           = trim($request->status);
        $category_model->save();

        Alert::success(title: 'Category Created Successfully!');

        return redirect()->route('dashboard.category_list');

    }

    public function category_edit($id)
    {        
        $data['getRecord'] = ProjectCategory::getSingle($id);
        return view('dashboard.project_category.category_edit',$data );
    }

    public function category_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [    
            'slug' => 'required|unique:project_categories,slug',$id,
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        
        $category_model = ProjectCategory::getSingle($id);;
        
        if (!$category_model) {
            return redirect()->back()->with('error', 'Category not found!');
        }
        
        $category_model->category_name    = trim($request->category_name);
        $category_model->category_name_bn = trim($request->category_name_bn);
        $category_model->slug             = trim($request->slug);
        $category_model->serial           = (int)trim($request->serial);
        $category_model->status           = trim($request->status);
        $category_model->save();
   

        Alert::success(title: 'Category Updated Successfully!');

        return redirect()->route('dashboard.category_list');
        
    }

    public function category_deleted($id)
    {
        $category = ProjectCategory::getSingle($id);
        $category->is_delete = 1;
        $category->save();

        Alert::success('Project successfully deleted.');

        return redirect()->back();
    }
        
}
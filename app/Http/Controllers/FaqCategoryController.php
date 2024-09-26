<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class FaqCategoryController extends Controller
{
    public function FaqCategory_list()
    {
        $data['getFaqCategory'] = FaqCategory::getFaqCategory();
        return view('dashboard.faq_category.list',$data);
    }

     public function FaqCategory_add()
    {
        $data['getProjectCategory'] = ProjectCategory::getRecord();
        return view('dashboard.faq_category.add',$data);
    }

    public function FaqCategory_insert(Request $request)
    {
        // dd($request->all());
        // exit();

        $validator = Validator::make($request->all(), [

            'faq_cat_name_bn' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $faq_model = new FaqCategory();

        $faq_model->faq_cat_id      = $request->faq_cat_id;
        $faq_model->faq_cat_name    = trim($request->faq_cat_name);
        $faq_model->faq_cat_name_bn = trim($request->faq_cat_name_bn);
        $faq_model->faq_cat_serial  = (int)trim($request->faq_cat_serial);
        $faq_model->faq_cat_status  = trim($request->faq_cat_status);
        $faq_model->save();

        Alert::success(title: 'FAQ Category Created Successfully!');

        return redirect()->route('dashboard.faq_category_list');

    }

    public function FaqCategory_edit($id)
    {
        $data['getProjectCategory'] = ProjectCategory::getRecord();
        $data['getRecord'] = FaqCategory::getSingle($id);
        return view('dashboard.faq_category.edit',$data );
    }
    public function FaqCategory_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'faq_cat_name_bn' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            Alert::error('Validation Error!', implode('<br>', $errors));

            return redirect()->back()->withInput();
        }

        $faq_model = FaqCategory::getSingle($id);;

        if (!$faq_model) {
            return redirect()->back()->with('error', 'Category not found!');
        }

        $faq_model->faq_cat_id      = $request->faq_cat_id;
        $faq_model->faq_cat_name    = trim($request->faq_cat_name);
        $faq_model->faq_cat_name_bn = trim($request->faq_cat_name_bn);
        $faq_model->faq_cat_serial  = (int)trim($request->faq_cat_serial);
        $faq_model->faq_cat_status  = trim($request->faq_cat_status);
        $faq_model->save();


        Alert::success(title: 'FAQ Category Updated Successfully!');

        return redirect()->route('dashboard.faq_category_list');
    }

    public function FaqCategory_deleted($id)
    {
        $faq_model = FaqCategory::getSingle($id);
        $faq_model->faq_cat_status = 'Hide';
        $faq_model->save();

        Alert::success('FAQ Category successfully deleted.');

        return redirect()->back();

    }
}
<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;
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
        return view('dashboard.faq_category.add');
    }

    public function FaqCategory_insert(Request $request)
    {
        // dd($request->all());
        // exit();

        $validator = Validator::make($request->all(), [

            'faq_cat_name_bn' => 'required',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $faq_model = new FaqCategory();

        $faq_model->faq_cat_id      = $request->faq_cat_id;
        $faq_model->faq_cat_name    = trim($request->faq_cat_name);
        $faq_model->faq_cat_name_bn = trim($request->faq_cat_name_bn);
        $faq_model->faq_cat_serial  = (int)trim($request->faq_cat_serial);
        $faq_model->faq_cat_status  = trim($request->faq_cat_status);
        $faq_model->save();

        return redirect('dashboard/faq_category_list')->with('success', 'FAQ Category Created Successfully!');

    }

    public function FaqCategory_edit($id)
    {

        $data['getRecord'] = FaqCategory::getSingle($id);
        return view('dashboard.faq_category.edit',$data );
    }
    public function FaqCategory_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'faq_cat_name_bn' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
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


        return redirect('dashboard/faq_category_list')->with('success', 'FAQ Category Updated!');
    }

    public function FaqCategory_deleted($id)
    {
        $faq_model = FaqCategory::getSingle($id);
        $faq_model->faq_cat_status = 'Hide';
        $faq_model->save();

        return redirect()->back()->with('success', "FAQ Category successfully deleted.");
    }
}
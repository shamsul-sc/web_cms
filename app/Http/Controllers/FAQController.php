<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function Faq_list()
    {
        $data['getFaq'] = FAQ::getFaq();
        // dd($data['getFaq']);
        return view('dashboard.faq.faq_list', $data);
    }

     public function Faq_add()
    {
        $data['getFaqCategory'] = FaqCategory::getFaqCategory();
        // dd($data['getFaqCategory']);exit;
        return view('dashboard.faq.faq_add',$data);
    }

    public function Faq_insert(Request $request)
    {
        // dd($request->all());
        // exit();

        $validator = Validator::make($request->all(), [

            'question_bn' => 'required',
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $faq_model = new FAQ();

        $faq_model->faq_cat_id  = $request->faq_cat_id;
        $faq_model->position    = $request->position;
        $faq_model->question    = trim($request->question);
        $faq_model->answer      = trim($request->answer);
        $faq_model->question_bn = trim($request->question_bn);
        $faq_model->answer_bn   = trim($request->answer_bn);
        $faq_model->status      = trim($request->status);
        $faq_model->save();

        return redirect('dashboard/faq_list')->with('success', 'FAQ  Created Successfully!');

    }

    public function Faq_edit($id)
    {
        $data['getFaqCategory'] = FaqCategory::getFaqCategory();
        $data['getRecord'] = FAQ::getSingle($id);
        return view('dashboard.faq.faq_edit',$data );
    }
    public function Faq_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'question_bn' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation error!');
        }

        $faq_model = FAQ::getSingle($id);;

        if (!$faq_model) {
            return redirect()->back()->with('error', 'FAQ not found!');
        }

        $faq_model->faq_cat_id  = $request->faq_cat_id;
        $faq_model->position    = $request->position;
        $faq_model->question    = trim($request->question);
        $faq_model->answer      = trim($request->answer);
        $faq_model->question_bn = trim($request->question_bn);
        $faq_model->answer_bn   = trim($request->answer_bn);
        $faq_model->status      = trim($request->status);
        $faq_model->save();

        return redirect('dashboard/faq_list')->with('success', 'FAQ  Updated Successfully!');
    }

    public function Faq_deleted($id)
    {
        $faq_model = FAQ::getSingle($id);
        $faq_model->status = 'Hide';
        $faq_model->save();

        return redirect()->back()->with('success', "FAQ  successfully deleted.");
    }
}
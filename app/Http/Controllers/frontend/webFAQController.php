<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class WebFAQController extends Controller
{
    public function faqs()
    {
        $data['faqs'] = FAQ::join('faq_categories', 'faq_categories.id', '=', 'f_a_q_s.faq_cat_id')->where('status', 'show')->orderBy('position')->get();
        // dd($data['projects']); exit;
        return view('pages.faqs', $data);
    }
}

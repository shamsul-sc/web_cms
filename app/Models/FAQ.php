<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    static public function getFaq()
    {
        return self::select('f_a_q_s.*','faq_categories.faq_cat_name as faq_cat_name')
            ->join('faq_categories', 'faq_categories.id', '=', 'f_a_q_s.faq_cat_id')
            ->where('f_a_q_s.status', '=', 'Show')
            ->orderBy('f_a_q_s.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}
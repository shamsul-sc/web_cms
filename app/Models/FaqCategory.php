<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;

    static public function getFaqCategory()
    {
        return self::select('faq_categories.*')
          
            ->where('faq_categories.faq_cat_status', '=', 'Show')
            ->orderBy('faq_categories.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}
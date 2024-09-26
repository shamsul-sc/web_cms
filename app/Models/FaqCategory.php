<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;

    protected $fillable = ['faq_cat_id'];

    static public function getFaqCategory()
    {
        return self::select('faq_categories.*','project_categories.category_name as category_name')
            ->join('project_categories', 'project_categories.id', '=', 'faq_categories.faq_cat_id')
            ->where('faq_categories.faq_cat_status', '=', 'Show')
            ->orderBy('faq_categories.id', 'desc')
            ->paginate(10);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}
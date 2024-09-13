<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_title_bn'
    ];

    protected $table = 'case_studies';

    static public function getCaseStudy()
    {
        return self::select('case_studies.*')
            // ->join('projects', 'projects.id', '=', 'case_studies.project_id')
            ->where('case_studies.is_delete', '=', 0)
            ->orderBy('case_studies.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}
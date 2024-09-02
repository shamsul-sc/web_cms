<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $table = 'project_categories';

    static public function getRecord()
    {
        return self::select('project_categories.*')
            ->orderBy('project_categories.cat_id', 'desc')
            ->get();
    }
}
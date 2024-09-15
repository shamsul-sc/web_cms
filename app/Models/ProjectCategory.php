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
            ->where('is_delete', '=', 0)
            ->orderBy('serial')
            ->paginate(10);
            // ->get();
    }

    static public function getSingle($id)
    {
        // return self::where('cat_id', $cat_id)->first();
        return self::find($id);
    }
}
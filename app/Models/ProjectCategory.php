<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'cat_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $table = 'project_categories';

    static public function getRecord()
    {
        return self::select('project_categories.*')
            ->where('is_delete', '=', 0)
            ->orderBy('project_categories.cat_id', 'desc')
            ->get();
    }

    static public function getSingle($cat_id)
    {
     
        // return self::where('cat_id', $cat_id)->first();
        return self::find($cat_id);
    }
}
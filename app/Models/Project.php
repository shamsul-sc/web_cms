<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'slug',
        'project_title_bn',
        'joint_project',
        'user_id',
        'project_approx_budget',
        'introduction',
        'introduction_bn',
        'details',
        'details_bn',
        'project_summary',
        'project_summary_bn',
        'youtube_video_link',
        'album_id',
        'featured_project',
        'state',
        'status',
        'serial',
        'project_image',
        'cat_id',
    ];

    protected $table = 'projects';

    static public function getProject()
    {
        return self::select('projects.*','project_categories.category_name as category_name')
            ->join('project_categories', 'project_categories.cat_id', '=', 'projects.id')
            ->where('projects.is_delete', '=', 0)
            ->orderBy('projects.id', 'desc')
            ->paginate(20);
    }

     static public function getSingle($id)
    {

        return self::find($id);
    }

}
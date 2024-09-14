<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    static public function getProject()
    {
        return self::select('projects.*', 'project_categories.category_name as category_name', 'gallery_albums.album_name as album_name')
                    ->join('project_categories', 'project_categories.id', '=', 'projects.cat_id')
                    ->join('gallery_albums', 'gallery_albums.id', '=', 'projects.album_id')
                    ->where('projects.is_delete', '=', 0)
                    ->orderBy('projects.id', 'desc')
                    ->paginate(20);
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }

}
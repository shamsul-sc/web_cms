<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    use HasFactory;

    // protected $fillable = ['follow_up_image'];
    protected $table = 'follow_ups';

    static public function getFollowUp()
    {
        return self::select('follow_ups.*')
            // ->join('projects', 'projects.id', '=', 'case_studies.project_id')
            ->where('follow_ups.status', '=', 'Show')
            ->orderBy('follow_ups.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}
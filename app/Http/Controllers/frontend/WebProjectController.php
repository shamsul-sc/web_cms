<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class webProjectController extends Controller
{
    public function projects()
    {
        $data['projects'] = Project::where('status', 'show')->orderBy('serial')->get();
        // dd($data['projects']); exit;
        return view('pages.projects', $data);
    }
}

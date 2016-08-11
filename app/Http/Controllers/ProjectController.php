<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function index (Project $project){
        $this->data['projects'] = $project->getActiveProjects();
        return view('portfolio.list', $this->data);
    }
    public function detail($id){
        $this->data['project'] = Project::where('id', $id)->firstOrFail();
        return view('portfolio.detail', $this->data);
    }
}

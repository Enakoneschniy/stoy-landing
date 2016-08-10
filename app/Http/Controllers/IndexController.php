<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(Service $service, Project $project, Post $post){
        $this->data['services'] = $service->getLatestServices();
        $this->data['projects'] = $project->getLatestProjects();
        $this->data['posts'] = $post->getLatestPosts();
        return view('index.index', $this->data);
    }
}

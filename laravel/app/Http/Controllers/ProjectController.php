<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $page = Project::getBySlug('projects');
        $projects = Project::getAll();

        return view('projects', [
            "title" => $page->title,
            "projects" => $projects
        ]);
    }

    public function show(string $category, string $project)
    {
        $page = Project::getProjectBySlug($category, $project);

        return view('project', [
            "title" => $page->projectTitle,
            "address" => $page->projectAddress,
            "content" => $page->projectContent
        ]);
    }
}

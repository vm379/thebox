<?php

namespace App\Http\Controllers;

use App\Models\ProjectsCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function show(string $category)
    {

        $page = ProjectsCategory::getBySlug($category);
        $projects = ProjectsCategory::getProjectsByCategory($category);

        return view('projects-category', [
            "title" => $page->title,
            "projects" => $projects
        ]);
    }
}

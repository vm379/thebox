<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $page = Home::getBySlug('/');
        $projects = Project::getAll();

        return view('landing', [
            'title' => $page->title,
            'projects' => $projects
        ]);
    }
}

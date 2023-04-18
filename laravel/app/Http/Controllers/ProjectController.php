<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(string $category, string $project)
    {

        return view('project');
    }
}

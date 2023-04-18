<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function show(string $category)
    {

        return view('projects');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $page = Home::getBySlug('/');

        return view('landing', [
            'title' => $page->title
        ]);
    }
}

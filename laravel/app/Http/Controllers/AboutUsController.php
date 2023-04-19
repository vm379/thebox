<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show()
    {
        $page = AboutUs::getBySlug('about');

        return view('about', [
            "title" => $page->title,
            "content" => $page->content
        ]);
    }
}

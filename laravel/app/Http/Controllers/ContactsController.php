<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show()
    {
        $page = Service::getBySlug('contacts');

        return view('contacts', [
            "title" => $page->title,
            "content" => $page->content
        ]);
    }
}

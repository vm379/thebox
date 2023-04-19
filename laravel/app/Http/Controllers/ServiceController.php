<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $page = Service::getBySlug('services');

        return view('services', [
            "title" => $page->title,
            "content" => $page->content
        ]);
    }

    public function show(string $service)
    {

        $page = Service::getServiceBySlug($service);

        return view('service', [
            "title" => $page->title,
            "content" => $page->content
        ]);
    }
}

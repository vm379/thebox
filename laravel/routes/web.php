<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home page
Route::get('/', function () {
    return view('landing');
});

// about page
Route::get('/about', function () {
    return view('about');
});

// projects page
Route::get('/projects', function () {
    return view('projects');
});

// projects category
Route::get('/projects/{category}', function () {
    return view('projects');
});

// project
Route::get('/projects/{category}/{project}', function () {
    return view('project');
});

// services
Route::get('/services', function () {
    return view('services');
});

// service
Route::get('/services/{service}', function () {
    return view('service');
});

//contacts
Route::get('/contacts', function () {
    return view('contacts');
});

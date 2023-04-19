<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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
Route::get('/', [HomeController::class, 'show']);

// about page 
Route::get('/about', [AboutUsController::class, 'show']);

// projects page
Route::get('/projects', [ProjectController::class, 'index']);

// projects category
Route::get('/projects/{category}', [ProjectCategoryController::class, 'show']);

// project page
Route::get('/projects/{category}/{project}', [ProjectController::class, 'show']);

// services page
Route::get('/services', [ServiceController::class, 'index']);

// service page
Route::get('/services/{service}', [ServiceController::class, 'show']);

// contacts page
Route::get('/contacts', [ContactsController::class, 'show']);

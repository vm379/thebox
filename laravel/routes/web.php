<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
Route::get('/{page}', [PageController::class, 'show']);

// projects category
Route::get('/projects/{category}', [ProjectCategoryController::class, 'show']);

// project
Route::get('/projects/{category}/{project}', [ProjectController::class, 'show']);

// service
Route::get('/services/{service}', [ServiceController::class, 'show']);

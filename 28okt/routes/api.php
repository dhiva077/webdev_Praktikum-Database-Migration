<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;

// Route dasar API
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to Dhiva Portfolio API']);
});

// HOME
Route::get('/home', [HomeController::class, 'index']);

// ABOUT
Route::get('/about', [AboutController::class, 'index']);

// EDUCATION
Route::get('/education', [EducationController::class, 'index']);
Route::get('/education/{id}', [EducationController::class, 'show']);

// PROJECT
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);

// SKILL
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);

// CONTACT
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

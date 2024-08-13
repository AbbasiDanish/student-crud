<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// CRUD routes for students
Route::resource('students', StudentController::class);
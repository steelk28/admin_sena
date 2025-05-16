<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseTeacherController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/course_teacher/create', [CourseTeacherController::class, 'create'])->name('course_teacher.create');
Route::post('/course_teacher', [CourseTeacherController::class, 'store'])->name('course_teacher.store');


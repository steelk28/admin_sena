<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseTeacherController;

Route::get('/', function () {
    return view('indexs.index');
})->name('inicio');

Route::get('/crear/area',[AreaController::class, 'index'])->name('area');

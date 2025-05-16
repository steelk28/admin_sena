<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTeacher; // Esto es importante si usas CourseTeacher::create()

class CourseTeacherController extends Controller
{
    public function create()
    {
        return view('course_teacher.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|integer',
            'teacher_id' => 'required|integer',
        ]);

        CourseTeacher::create($validated);

        return redirect()->back()->with('success', 'Relación guardada correctamente');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentices.index', compact('apprentices'));
    }

    public function create()
    {
        $courses = \App\Models\Course::all();
        $computers = \App\Models\Computer::all();
        return view('apprentices.create', compact('courses', 'computers'));
    }
public function store(Request $request)
{
    // dd($request->all()); ← elimina o comenta esta línea

    Apprentice::create($request->all());
    return redirect()->route('apprentices.index');
}

    public function edit($id)
    {
        $apprentice = Apprentice::findOrFail($id);
        return view('apprentices.edit', compact('apprentice'));
    }

    public function update(Request $request, $id)
    {
        $apprentice = Apprentice::findOrFail($id);
        $apprentice->update($request->all());
        return redirect()->route('apprentices.index');
    }

    public function destroy($id)
    {
        $apprentice = Apprentice::findOrFail($id);
        $apprentice->delete();
        return redirect()->route('apprentices.index');
    }
}


<?php

namespace App\Http\Controllers;

use App\Assignment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::where('user_id', 1)->get();
        return view('workspace.faculty.assignments.index')->with(['assignments' => $assignments]);
    }

    public function create()
    {
        return view('workspace.faculty.assignments.create');
    }

    public function edit($id)
    {
        $assignment = Assignment::find($id);
        return view('workspace.faculty.assignments.edit')->with(['assignment' => $assignment]);
    }

    public function store(Request $request)
    {
        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->info = Session::get('id') ?: 1;
        $assignment->user_id = 1;
        $assignment->subject_id = $request->subject_id;
        $assignment->save();
        return redirect()->route('assignments.edit', ['id' => $assignment->id]);
    }

    public function show($id)
    {
        $assignment = Assignment::find($id);
    }

    public function update($id, Request $request)
    {
        $assignment = Assignment::find($id);
        $assignment->title = $request->title;
        $assignment->info = Session::get('id') ?: 1;
        $assignment->user_id = 1;
        $assignment->subject_id = $request->subject_id;
        $assignment->save();
        return redirect()->route('assignments.edit', ['id' => $assignment->id]);
    }
}

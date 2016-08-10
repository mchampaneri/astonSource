<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Subject;
use Auth;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $hod = Faculty::where('user_id', Auth::user()->id)->first();
        $subjects = Subject::where('department_id', $hod->department_id)->get();

        return view('workspace.faculty.hodtasks.subjects.index')->with(['subjects' => $subjects]);
    }

    public function create()
    {
        return view('workspace.faculty.hodtasks.subjects.create');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        $hod = Faculty::where('user_id', Auth::user()->id)->first();
        $faculties = Faculty::where('department_id', $hod->department_id)->get();

        return view('workspace.faculty.hodtasks.subjects.edit')->with(['subject'    => $subject,
                                                                        'faculties' => $faculties, ]);
    }

    public function store(Request $request)
    {
        $hod = Faculty::where('user_id', Auth::user()->id)->first();
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->code = $request->code;
        $subject->department_id = $hod->department_id; // Set the department ID
        $subject->description = $request->description;
        $subject->sem = $request->sem;
        $subject->added_by = \Auth::user()->id;

        $subject->save();

        return view('workspace.faculty.hodtasks.index');
    }

    public function update($id, Request $request)
    {
        $hod = Faculty::where('user_id', Auth::user()->id)->first();
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->code = $request->code;
        $subject->department_id = $hod->department_id; // Set the department ID
        $subject->description = $request->description;
        $subject->sem = $request->sem;
        $subject->added_by = \Auth::user()->id;

        $subject->faculties()->sync($request->faculties);

        $subject->save();

        return view('workspace.faculty.hodtasks.index');
    }
}

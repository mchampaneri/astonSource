<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Faculty;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    public function index()
    {

        $assignments = Assignment::where('faculty_id',Session::get('id'))->get();
        return view('workspace.faculty.assignments.index')->with(['assignments'=>$assignments]);
    }

    public function create()
    {
        $subjects = Faculty::find(Session::get('id'))->subjects()->get();
        return view('workspace.faculty.assignments.create')->with(['subjects'=>$subjects]);
    }

    public function store(Request $request)
    {

        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->info = $request->info;
        $assignment->sem = Subject::find($request->subject_id)->sem;
        $assignment->subject_id = $request->subject_id;
        $assignment->faculty_id = Session::get('id'); // Faculty_Id
        $assignment->save();
        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function show($id)
    {
        $assignment = Assignment::find($id);
        return $assignment;
    }

    public function edit($id){
        $subjects = Faculty::find(Session::get('id'))->subjects()->get();
        $assignment = Assignment::find($id);
        return view('workspace.faculty.assignments.edit')->with(['assignment'=>$assignment,'subjects'=>$subjects]);
    }

    public function update($id,Request $request)
    {
        $assignment = Assignment::find($id);
        $assignment->title = $request->title;
        $assignment->info = $request->info;
        $assignment->sem = Subject::find($request->subject_id)->sem;
        $assignment->subject_id = $request->subject_id;
        $assignment->faculty_id = Session::get('id'); // Faculty_Id
        $assignment->save();
        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }
}

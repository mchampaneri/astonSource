<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    public function index()
    {

        $assigments = Assignment::where('user_id',Session::get('id')?:1);
        return view('workspace.faculty.assignments.index')->with(['assignemnts'=>$assigments]);
    }

    public function create()
    {
        return view('workspace.faculty.assignments.create');
    }

    public function store(Request $request)
    {

        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->info = 1;
        $assignment->sem = 1;
        $assignment->subject_id = $request->subject_id ?:1;
        $assignment->user_id = Session::get('id')?:1;

        $assignment->save();
        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function show($id)
    {
        $assignment = Assignment::find($id);
        return $assignment;
    }

    public function edit($id){
        $assignment = Assignment::find($id);
        return view('workspace.faculty.assignments.edit')->with(['assignment'=>$assignment]);
    }
}

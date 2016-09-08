<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Submit;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubmissionController extends Controller
{
    public function index()
    {
        $assignments = Assignment::where('sem', \Session::get('sem'))
                                    ->get();
        return view('workspace.student.assignments.index')
                    ->with(['assignments' => $assignments]);
    }

    public function store(Request $request)
    {
        $submit = new Submit();
        $submit->user_id = \Auth::user()->id;
        $submit->assignment_id = $request->assignment_id;
        $submit->status = 'unsubmitted';
        $submit->comment = 'uncommented';
        $submit->save();
        return redirect()->route('submits.edit',['id'=>$submit->id]);
    }
    
    public function edit($id)
    {
        $submit = Submit::find($id);
        $assignment = Assignment::where('id',$submit->assignment_id)->first();
        return view('workspace.student.assignments.edit')
                    ->with(['assignment' => $assignment, 'submit' => $submit]);
    }

    public function update($id)
    {
        $submit = Submit::find($id);
        $submit->status = "submitted";
        $submit->save();
        return redirect()->route('submits.edit',['id'=>$submit->id]);

    }
}

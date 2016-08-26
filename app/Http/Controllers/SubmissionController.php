<?php

namespace App\Http\Controllers;

use App\Assignment;
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

    public function edit($id)
    {
        $assignment = Assignment::find($id);
        return view('workspace.student.assignments.edit')
                    ->with(['assignment' => $assignment]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    public  function index()
    {
        $subjects = Subject::where('department_id',Session::get('dept_id')?:1)
                                ->get();
        return view('workspace.faculty.hod.subjects.index')->with(['subjects'=>$subjects]);
    }

    public function create()
    {
        return view('workspace.faculty.hod.subjects.create');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return $subject;
    }
    
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->department_id = Session::get('dept_id')?: 1;
        $subject->sem = $request->sem;
//        $subject->faculties()->sync( $request->faculties );
//        $subject->added_by = Session::get('id')?: 1;
        $subject->save();
        return redirect()->route('subjects.index');
    }


    public function update($id, Request $request)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->department_id = Session::get('dept_id');
        $subject->sem = $request->sem;
        $subject->added_by = Session::get('id');
        $subject->faculties()->sync( $request->faculties );
        $subject->save();
        return "A new Subject Added";
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);
        return $subject->delete();
    }
}

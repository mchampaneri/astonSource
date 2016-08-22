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
        $subjects = Subject::where('department_id',Session::get('dept_id'))
                                ->get();
        return view('workspace.faculty.hod.subjects.index')->with(['subjects'=>$subjects]);
    }

    public function create()
    {
        return view('workspace.faculty.hod.subjects.create');
    }

    public function edit($id)
    {
        $i=0;
        
        $subject = Subject::find($id);
        $faculty_subject =  $subject->faculties()->get()->toArray();
        foreach ( $faculty_subject as $faculty_selected)
        {
            $faculty_selected[$i] = $faculty_subject[$i]['id'];
        }
        if(sizeof($faculty_selected) == 0)
        {
            $faculty_selected= [0];
        }
        return view('workspace.faculty.hod.subjects.edit')->with(['subject'=>$subject,'faculty_selected'=>$faculty_selected]);
    }
    
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->department_id = Session::get('dept_id');
        $subject->sem = $request->sem;
        $subject->user_id = Session::get('id');
        $subject->save();
        $subject->faculties()->sync( $request->faculties );
        return redirect()->route('subjects.index');
    }


    public function update($id, Request $request)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->department_id = Session::get('dept_id');
        $subject->sem = $request->sem;
        $subject->user_id = Session::get('id');
        $subject->save();
        $subject->faculties()->sync( $request->faculties );
        return "A new Subject Added";
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);
        return $subject->delete();
    }
}

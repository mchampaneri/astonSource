<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;


class SubjectController extends Controller
{
    public  function index()
    {
        $subjects = Subject::department(\Auth::user()->faculty()->department_id);
        return view('workspace.faculty.hod.subjects.index')->with(['subjects'=>$subjects]);
    }

    public function create()
    {
        $faculties = Faculty::department(\Auth::user()->faculty()->department_id);
        return view('workspace.faculty.hod.subjects.create')->with(['faculties'=>$faculties]);
    }

    public function edit($id)
    {
        $faculties = Faculty::department(\Auth::user()->faculty()->department_id);

        $subject = Subject::find($id);
        $faculty_selected =  $subject->users()->pluck('user_id')->toArray();
        return view('workspace.faculty.hod.subjects.edit')->with(['faculties'=>$faculties,'subject'=>$subject,'faculty_selected'=>$faculty_selected]);
    }
    
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->department_id = \Auth::user()->faculty()->department_id;
        $subject->sem = $request->sem;
        $subject->user_id = \Auth::user()->id;
        $subject->save();
        $subject->users()->sync( $request->faculties );
        return redirect()->route('subjects.index');
    }


    public function update($id, Request $request)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->department_id = \Auth::user()->faculty()->department_id;
        $subject->sem = $request->sem;
        $subject->user_id = \Auth::user()->id;
        $subject->save();
        $subject->users()->sync( $request->faculties );
        return redirect()->route('subjects.index');
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);
        return $subject->delete();
    }
}

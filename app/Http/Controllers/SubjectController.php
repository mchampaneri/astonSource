<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use Auth;

class SubjectController extends Controller
{

    public function index()
    {

      $subjects = Subject::where('department_id',Auth::user()->asFaculty()->first()->department_id)->get();
      return view('workspace.faculty.hodtasks.subjects.index')->with(['subjects'=>$subjects]);
    }

    public function create()
    {
        return view('workspace.faculty.hodtasks.subjects.create');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        $faculties = Faculty::where('department_id',Auth::user()->asFaculty()->first()->department_id)->get();
        $faculty_selected = $subject->faculties()->lists('faculty_id')->toArray();
        if(sizeof($faculty_selected) == 0)
        {
            $faculty_selected= [0];
        }
//        return $faculty_selected;
        return view('workspace.faculty.hodtasks.subjects.edit')->with(['subject'=>$subject,
                                                                        'faculty_selected' => $faculty_selected,
                                                                        'faculties'=>$faculties]);
    }

    public function store(Request $request)
    {

        $subject = new Subject();
        $subject->name = $request->name;
        $subject->code = $request->code;
        $subject->department_id = Auth::user()->asFaculty()->first()->department_id; // Set the department ID
        $subject->description = $request->description;
        $subject->sem = $request->sem;
        $subject->added_by = \Auth::user()->id;

        $subject->save();

        return view('workspace.faculty.hodtasks.index');
    }

    public function update($id,Request $request)
    {

        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->code = $request->code;
        $subject->department_id = Auth::user()->asFaculty()->first()->department_id; // Set the department ID
        $subject->description = $request->description;
        $subject->sem = $request->sem;
        $subject->added_by = \Auth::user()->id;
        if(!isset($request->faculties))
            $request->faculties = [ ];
        $subject->faculties()->sync($request->faculties);

        $subject->save();

        return view('workspace.faculty.hodtasks.index');
    }
}

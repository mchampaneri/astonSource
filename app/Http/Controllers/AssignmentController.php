<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Faculty;
use App\Subject;
use App\Submit;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

/*
 *  Uses user id for saving the resource
 *  Uses faculty id to fetch the subjects of faculty
 *
 *
 */

class AssignmentController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
        $assignments = Assignment::where('user_id',\Auth::user()->id)
                                    ->get();
        return view('workspace.faculty.assignments.index')
                    ->with(['assignments'=>$assignments]);
    }

    /**
     * @return $this
     */
    public function create()
    {
        $subjects = Faculty::find(Session::get('id'))
                            ->subjects()
                            ->get();
        return view('workspace.faculty.assignments.create')
                    ->with(['subjects'=>$subjects]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $assignment = new Assignment();

        $assignment->title = $request->title;
        $assignment->info = $request->info;
        $assignment->sem = Subject::find($request->subject_id)
                                    ->sem;
        $assignment->subject_id = $request->subject_id;
        $assignment->user_id = \Auth::user()
                                    ->id;
        $assignment->save();

        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);

        return $assignment;
    }

    /**
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $subjects = Faculty::find(Session::get('id'))
                                            ->subjects()
                                            ->get();
        $assignment = Assignment::find($id);

        return view('workspace.faculty.assignments.edit')
                    ->with(['assignment'=>$assignment,
                            'subjects'=>$subjects]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $assignment = Assignment::find($id);

        $assignment->title = $request->title;
        $assignment->info = $request->info;
        $assignment->sem = Subject::find($request->subject_id)->sem;
        $assignment->subject_id = $request->subject_id;
        $assignment->user_id = \Auth::user()->id;
        $assignment->save();

        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function submitlist($id)
    {
        $assigment_id = $id;
        $submits = Submit::where('assignment_id',$id)
                    ->where('status','!=','unsubmitted')
                    ->get();
        return view('workspace.faculty.assignments.submitlist')
            ->with(['submits'=>$submits,'assignment_id'=>$assigment_id]);
    }

    public function answersof($submitid)
    {
        $submit = Submit::find($submitid);
        $assigment = Assignment::find($submit->assignment_id);
        $user_id = $submit->user_id;
        return view('workspace.faculty.assignments.answers')
            ->with(['assignment'=>$assigment,'user_id'=>$user_id,'submit'=>$submit]);
    }

    public function accept($id)
    {
        $submit = Submit::find($id);
        $submit->status = "Accepted";
        $submit->save();
        return redirect()->route('assignments.submitlist',['id'=>$submit->assignment_id]);
    }

    public function reject($id, Request $request)
    {
        $submit = Submit::find($id);
        $submit->status = "Rejected";
        $submit->comment = $request->comment;
        $submit->save();
        return redirect()->route('assignments.submitlist',['id'=>$submit->assignment_id]);
    }
}

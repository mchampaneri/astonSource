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
        $assignments = Assignment::auth()->get();
        return view('workspace.faculty.assignments.index')
                    ->with(['assignments'=>$assignments]);
    }

    /**
     * @return $this
     */
    public function create()
    {
        $subjects = \Auth::user()->subjects()->get();
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
        $assignment->info = $request->info;     ;
        $assignment->subject_id = $request->subject_id;
        $assignment->user_id = \Auth::user()->id;
        $assignment->save();
        flash()->success('Your Assignment Has Been Saved');
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
        $subjects = \Auth::user()->subjects()->get();
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
        $assignment->subject_id = $request->subject_id;
        $assignment->user_id = \Auth::user()->id;
        $assignment->save();
        flash()->success('Your Assignment Has Been Updated');
        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function submitlist($id)
    {
        $assignment_id = $id;
        $submits = Submit::Submited($id)->get();
        return view('workspace.faculty.assignments.submitlist')
            ->with(['submits'=>$submits,'assignment_id'=>$assignment_id]);
    }

    public function answersof($submitid)
    {
        $submit = Submit::find($submitid);
        return view('workspace.faculty.assignments.answers')
            ->with(['submit'=>$submit]);
    }

    public function accept($id)
    {
        $submit = Submit::find($id);
        $submit->status = 3;
        $submit->save();
        flash()->success('Submission accepted Successfully ');
        return redirect()->route('assignments.submitlist',['id'=>$submit->assignment_id]);
    }

    public function reject($id, Request $request)
    {
        $submit = Submit::find($id);
        $submit->status = 4;
        $submit->comment = $request->comment;
        $submit->save();
        flash()->success('Submission rejected Successfully ');
        return redirect()->route('assignments.submitlist',['id'=>$submit->assignment_id]);
    }

    public function destroy($id)
    {
        $assignment = Assignment::find($id);
        if($assignment->Submits()->count() > 0) {
            flash()->warning('Can not Be Deleted Because It has been attended by a student ');
            return redirect()->route('assignments.edit', ['id' => $id]);
        }
        else
        {
            $assignment->delete();
            flash()->success('Assignment deleted Successfully ');
            return  redirect()->route('assignments.index');
        }
    }
}

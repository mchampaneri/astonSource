<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Faculty;
use App\Subject;
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
}

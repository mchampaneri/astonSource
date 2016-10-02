<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Faculty;
use App\Question;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function create()
    {

    }

    public function edit($id)
    {
        $question = Question::find($id);
        $subjects = \Auth::user()->subjects()->get();
        $assignment = Assignment::find($question->assignment_id);
        return view('workspace.faculty.assignments.edit')->with(['assignment'=>$assignment,'subjects'=>$subjects,'question'=>$question]);
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->user_id = \Auth::user()->id;
        $question->assignment_id = $request->assignment_id;
        $question->subject_id = Assignment::find($request->assignment_id)->subject_id;
        $question->imp_lvl = $request->imp_lvl;
        $question->hint = $request->hint;
        $question->save();
        flash()->success('Question Saved');
        return redirect()->route('assignments.edit',['id'=>$question->assignment_id]);
    }

    public function update($id, Request $request)
    {
        $question = Question::find($id);
        $question->question = $request->question;
        $question->user_id = \Auth::user()->id;
        $question->imp_lvl = $request->imp_lvl;
        $question->hint = $request->hint;
        $question->save();
        flash()->success('Question Updated');
        return redirect()->route('assignments.edit',['id'=>$question->assignment_id]);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        flash()->success('Question Deleted');
        return redirect()->route('assignments.edit',['id'=>$question->assignment_id]);
    }
}

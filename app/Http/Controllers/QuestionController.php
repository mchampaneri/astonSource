<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $assignment = Assignment::find($request->assignment_id);
        $question = new Question();
        $question->question = $request->question;
        $question->user_id = 1;
        $question->subject_id = $assignment->subject_id;
        $question->assignment_id = $assignment->id;

        $question->save();

        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function update($id, Request $request)
    {

        $assignment = Assignment::find($request->assignment_id);
        $question = Question::find($id);
        $question->question = $request->question;
        $question->user_id = 1;
        $question->subject_id = $assignment->subject_id;
        $question->assignment_id = $assignment->id;

        $question->save();
        return redirect()->route('assignments.edit',['id'=>$assignment->id]);
    }

    public function edit($id)
    {
        $question = Question::find($id);
        $assignment = Assignment::find($question->assignment_id);
        return view('workspace.faculty.assignments.edit')->with(['question'=>$question,'assignment'=>$assignment]);
    }
}

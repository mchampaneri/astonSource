<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Assingment;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    public function index($assingment_id)
    {
        $assingment = Assingment::find($assingment_id);
        $questions = $assingment->questions()->get();

        return view('workspace.student.assingments.questions.index')->with(['assingment' => $assingment,
            'questions' => $questions]);
    }

    public function create($question_id)
    {
        $question = Question::find($question_id);
        return view('workspace.student.assingments.questions.create')->with(['question' => $question]);
    }

    public function store($question_id,Request $request)
    {

        $answer = new Answer();
        $question = Question::find($question_id);
        $answer->student_id = \Auth::user()->asStudent()->first()->id;
        $answer->question_id = $question_id;
        $answer->assingment_id = $question->assingment()->first()->id;
        $answer->answer = $request->answer;
        $answer->status = 1;
        $answer->save();

        return redirect()->route('workspace.student.fill.answers.index',['id'=>$answer->assingment_id]);
    }

    public  function edit($assingment_id,$question_id)
    {
        $question = Question::find($question_id);
        $answer = $question->Answer();
        return view('workspace.student.assingments.questions.edit')->with(['question' => $question,'answer'=>$answer]);
    }

}

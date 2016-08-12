<?php

namespace App\Http\Controllers;

use App\Assingment;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuestionController extends Controller
{
    public function index($assingment_id)
    {
        $assingment = Assingment::find($assingment_id);
        $questions = $assingment->questions()->get();

        return view('workspace.faculty.assingments.questions.index')->with(['assingment' => $assingment,
            'questions' => $questions]);
    }

    public function create($assingment_id)
    {
        $assingment = Assingment::find($assingment_id);

        return view('workspace.faculty.assingments.questions.create')->with(['assingment' => $assingment]);
    }

    public function store($assingment_id,Request $request)
    {
        $assingment = Assingment::find($assingment_id);
        $question = new Question();
        $question->question = $request->question;
        $question->subject_id = $assingment->subject_id;
        $question->assingment_id = $assingment_id;
        $question->faculty_id = \Auth::user()->asFaculty()->first()->id;
        $question->type = $request->type;
        $question->imp_level = $request->imp_level;
        $question->length = 0;
        $question->save();
        return redirect()->route('workspace.faculty.assingments.questions.index',['id' => $assingment_id]);
    }

    public function edit($assingment_id,$question_id)
    {
        $assingment = Assingment::find($assingment_id);
        $question =  Question::find($question_id);
        return view('workspace.faculty.assingments.questions.edit')->with(['assingment' => $assingment, 'question'=>$question]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use DOMDocument;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->student_id = Session::get('id');
        $answer->answer = $request->answer;
        $answer->assignment_id = Question::find($request->question_id)->assignment_id;
        $answer->save();
        return redirect()->route('assignment.index');
    }

    public function update($id,Request $request)
    {
        $answer = Answer::find($id);
        $answer->question_id = $request->question_id;
        $answer->student_id = Session::get('id');
        $answer->assignment_id = Question::find($request->question_id)->assignment_id;
        $answer->answer = $request->answer;
            $answer->save();
            return redirect()->route('assignment.index');
    }

}

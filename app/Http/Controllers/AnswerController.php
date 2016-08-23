<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->user_id = Session::get('id');
        $answer->answer = $request->answer;
        $answer->save();
        return redirect()->route('assignment.index');
    }

    public function update($id,Request $request)
    {
        $answer = Answer::find($id);
        $answer->question_id = $request->question_id;
        $answer->user_id = Session::get('id');
        $answer->answer = $request->answer;
        $answer->save();
        return redirect()->route('assignment.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->user_id = Session::get('id');
        $answer->answer = $request->answers;
        return "Answers Stored";
    }
}

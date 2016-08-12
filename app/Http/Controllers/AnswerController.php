<?php

namespace App\Http\Controllers;

use App\Assingment;
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
}

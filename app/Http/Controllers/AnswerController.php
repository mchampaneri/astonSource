<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests;

/*
 * Uses user_id to perform the resource operations
 *
 */
class AnswerController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->user_id = \Auth::user()
                                ->id;
        $answer->answer = $request->answer;
        $answer->assignment_id = Question::find($request->question_id)
                                            ->assignment_id;
        $answer->save();

        return redirect()->route('assignment.index');
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $answer = Answer::find($id);
        $answer->question_id = $request->question_id;
        $answer->user_id = \Auth::user()
                                ->id;
        $answer->assignment_id = Question::find($request->question_id)
                                            ->assignment_id;
        $answer->answer = $request->answer;
        $answer->save();

        return redirect()->route('assignment.index');
    }

}

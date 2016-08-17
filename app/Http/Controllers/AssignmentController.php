<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    public function index()
    {
        return "done";
        $assigments = Assignment::where('user_id',Session::get('id'));
        return $assigments;
    }

    public function create()
    {
        return "Create New Assignment";
    }

    public function store(Request $request)
    {

        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->sem = $request->sem;
        $assignment->subject_id = $request->subject_id;
        $assignment->user_id = Session::get('id')?:1;
        $assignment->questions = json_encode($request->questions);
        $assignment->save();
        return "Assignment created";
    }

    public function show($id)
    {
        $assignment = Assignment::find($id);
        $questions = $assignment->questions;
        $questions = json_decode($assignment->questions);
        foreach($questions as $question)
        {
            echo $question;
        }
        die();
    }
}

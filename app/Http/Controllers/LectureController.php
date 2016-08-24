<?php

namespace App\Http\Controllers;


use App\Faculty;
use App\Lecture;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Requests;

class LectureController extends Controller
{
    public function index()
    {

        $lectures = Lecture::where('faculty_id',\Session::get('id'))->get();
        return view('workspace.faculty.lectures.index')->with(['lectures'=>$lectures]);
    }

    public function create()
    {
        $subjects = Faculty::find(\Session::get('id'))->subjects()->get();
        return view('workspace.faculty.lectures.create')->with(['subjects'=>$subjects]);
    }
    public function store(Request $request)
    {

        $lecture = new Lecture();
        $lecture->title = $request->title;
        $lecture->info = $request->info;
        $lecture->lecture = $request->lecture;
        $lecture->subject_id = $request->subject_id;
        $lecture->faculty_id = \Session::get('id'); // Faculty_Id
        $lecture->save();
        return redirect()->route('lectures.index');
    }

    public function show($id)
    {
        $lecture = Lecture::find($id);
        return $lecture;
    }

    public function edit($id){
        $subjects = Faculty::find(\Session::get('id'))->subjects()->get();
        $lecture = Lecture::find($id);
        return view('workspace.faculty.lectures.edit')->with(['lecture'=>$lecture,'subjects'=>$subjects]);
    }

    public function update($id,Request $request)
    {
        $lecture = Lecture::find($id);
        $lecture->title = $request->title;
        $lecture->info = $request->info;
        $lecture->lecture = $request->lecture;
        $lecture->subject_id = $request->subject_id;
        $lecture->faculty_id = \Session::get('id'); // Faculty_Id
        $lecture->save();
        return redirect()->route('lectures.index');
    }
}

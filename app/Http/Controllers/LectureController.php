<?php

namespace App\Http\Controllers;


use App\Faculty;
use App\Lecture;
use App\Subject;
use core\Functions\Editor;
use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Storage;

class LectureController extends Controller
{
    public function index()
    {

        $lectures = Lecture::where('user_id',\Auth::user()->id)
                            ->get();
        return view('workspace.faculty.lectures.index')
                    ->with(['lectures'=>$lectures]);
    }

    public function create()
    {
        $subjects = Faculty::find(\Session::get('id'))
                            ->subjects()
                            ->get();
        return view('workspace.faculty.lectures.create')
                            ->with(['subjects'=>$subjects]);
    }
    public function store(Request $request)
    {
     

        $lecture = new Lecture();
        $lecture->title = $request->title;
        $lecture->info = $request->info;
        $lecture->lecture = b64toUrl($request->lecture);
        $lecture->subject_id = $request->subject_id;
        $lecture->user_id = \Auth::user()->id; // Faculty_Id
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
        $lecture->lecture = b64toUrl($request->lecture);
        $lecture->subject_id = $request->subject_id;
        $lecture->user_id = \Auth::user()->id; 
        $lecture->save();
        return redirect()->route('lectures.index');
    }
}

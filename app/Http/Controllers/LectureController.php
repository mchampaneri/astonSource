<?php

namespace App\Http\Controllers;


use App\Faculty;
use App\Lecture;
use App\Subject;
use Carbon\Carbon;
use core\Functions\Editor;
use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Storage;

class LectureController extends Controller
{
    public function index()
    {
        $lectures = Lecture::auth()->get();
        return view('workspace.faculty.lectures.index')
            ->with(['lectures' => $lectures]);
    }

    public function create()
    {
        $subjects = \Auth::user()->subjects()->get();
        return view('workspace.faculty.lectures.create')
            ->with(['subjects' => $subjects]);
    }

    public function store(Request $request)
    {


        $lecture = new Lecture();
        $lecture->title = $request->title;
        $lecture->info = $request->info;
        $lecture->lecture = b64toUrl($request->lecture);
        $lecture->subject_id = $request->subject_id;
        $lecture->due_date = Carbon::parse( $request->due_date);
        $lecture->user_id = \Auth::user()->id;
        $lecture->save();
        flash()->success('Lecture Stored Successfully');
        return redirect()->route('lectures.index');
    }

    public function show($id)
    {
        $lecture = Lecture::find($id);
        return $lecture;
    }

    public function edit($id)
    {
        $subjects = \Auth::user()->subjects()->get();
        $lecture = Lecture::find($id);
        return view('workspace.faculty.lectures.edit')->with(['lecture' => $lecture, 'subjects' => $subjects]);
    }

    public function update($id, Request $request)
    {

        $lecture = Lecture::find($id);
        $lecture->title = $request->title;
        $lecture->info = $request->info;
        $lecture->lecture = b64toUrl($request->lecture);
        $lecture->subject_id = $request->subject_id;
        $lecture->user_id = \Auth::user()->id;
        $lecture->due_date = Carbon::parse( $request->due_date);
        $lecture->save();
        flash()->success('Lecture Updated Successfully');
        return redirect()->route('lectures.index');
    }

    public function destroy($id)
    {
        $lecture = Lecture::find($id);
        $lecture->delete();
        flash()->success('Lecture deleted');
        return redirect()->route('lectures.index');
    }
}

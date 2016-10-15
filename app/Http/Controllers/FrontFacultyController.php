<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Lecture;
use App\Subject;


use App\Http\Requests;
use App\User;

class FrontFacultyController extends Controller
{
    public function index()
    {
        $faculties = User::faculties()->get();
        return view('front.index')->with(['faculties'=>$faculties]);
    }

    public function faculty($id)
    {
        $faculty = User::find($id);
        return view('front.faculty.index')->with(['faculty'=>$faculty]);
    }

    public function facultySubject($faculty_id,$subject_id)
    {
        $faculty = User::find($faculty_id);
        $subject = Subject::find($subject_id);
        $lectures = Lecture::facultysubject($faculty->id,$subject_id)->get();
        return view('front.faculty.lecture-list')->with(['faculty'=>$faculty,'lectures'=>$lectures,'subject'=>$subject]);
    }

    public function facultySubjectLecture($faculty_id,$subject_id,$lecture_id)
    {
        $faculty = User::find($faculty_id);
        $subject = Subject::find($subject_id)->name;
        $lecture = Lecture::find($lecture_id);
        return view('front.faculty.lecture')->with(['faculty'=>$faculty,'lecture'=>$lecture,'subject'=>$subject]);
    }
}

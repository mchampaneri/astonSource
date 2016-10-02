<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Department;
use App\Lecture;
use App\Post;
use App\Subject;
use App\User;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function admin()
    {
        $department_count = Department::count();
        $user_count = User::count();

        return view('workspace.admin.dashboard.index')
            ->with(['department_count' => $department_count,
                    'user_count' => $user_count]);
    }

    public function faculty()
    {
        $assignments = Assignment::Auth()->pluck('id','title');
        $post_count = Post::Auth()->count();
        $subject_count = \Auth::user()->subjects()->count();
        $lectures = Lecture::Auth()->today()->get();
       
        return view('workspace.faculty.dashboard.index')->with(['assignments'=>$assignments,'post_count'=>$post_count,'subject_count'=>$subject_count,'lectures'=>$lectures]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use Auth;

class SubjectController extends Controller
{
    public function index()
    {
      $subjects = Subject::where('department_id',Auth::user()->department_id)->get();
      return view('workspace.faculty.hodtasks.index')->with(['subjects'=>$subjects]);
    }
}

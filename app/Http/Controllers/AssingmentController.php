<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Faculty;
use App\Assingment;
use Illuminate\Support\Facades\Input;

class AssingmentController extends Controller
{
    public function index()
    {
      return view('workspace.faculty.assingments.index');
    }

    public function create(Request $request)
    {
        $id = $request->get('id');
      return view('workspace.faculty.assingments.create')->with(['subject_id'=>$id]);
    }

    public function edit($id)
    {
      $assingment = Assingment::find($id);

      return view('workspace.faculty.assingments.edit')->with(['assingment'=>$assingment]);
    }

    public function store(Request $request)
    {
      $faculty =\Auth::user()->asFaculty()->first();
      $assingment = new Assingment();
      $assingment->name = $request->name;
      $assingment->description = $request->description;
      $assingment->subject_id = $request->subject_id;
      $assingment->faculty_id = $faculty->id;
      $assingment->save();

      return redirect()->route('workspace.faculty.assingments.show',['id'=>$assingment->id]);
    }

    public function update($id , Request $request)
    {
        $assingment = Assingment::find($id);
        $assingment->name = $request->name;
        $assingment->description = $request->description;


        $assingment->save();

        return redirect()->route('workspace.faculty.assingments.show',['id'=>$assingment->id]);

    }

    public function show($id)
    {

        $assingment = Assingment::find($id);

        return redirect()->route('workspace.faculty.assingments.questions.index',['id'=>$assingment->id]);

    }
}

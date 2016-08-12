<?php

namespace App\Http\Controllers;

use App\Assingment;
use Illuminate\Http\Request;

use App\Http\Requests;

class FillController extends Controller
{
    public function index()
    {
        return view('workspace.student.assingments.index');
    }

    public function show($id)
    {
        $assingment = Assingment::find($id);

        return redirect()->route('workspace.student.fill.answers.index',['id'=>$assingment->id]);
    }
}

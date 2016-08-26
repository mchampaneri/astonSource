<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use JavaScript;


class ResultController extends Controller
{
    public function index()
    {
        $results = Result::where('user_id',\Auth::user()->id)
                            ->get();
        return view('workspace.student.results.index')
                    ->with(['results'=>$results]);
    }

    public function create()
    {
        return view('workspace.student.results.create');
    }

    public function store(Request $request)
    {
        $result = new Result();
        $result->title = $request->title;
        $result->user_id = \Auth::user()->id;
        $file = \Storage::put(\Auth::user()->id.'/results',$request->result_snap);
        $result->path = $file;
        $result->save();
        return redirect()->route('results.index');
    }

    public function edit($id)
    {
        $result = Result::find($id);

        JavaScript::put([
            'image'=>$result->path
        ]);
        return view('workspace.student.results.edit')
                    ->with(['result'=>$result]);
    }

    public function update($id,Request $request)
    {
        $result = Result::find($id);
        $result->title = $request->title;
        $result->user_id = \Auth::user()->id;
        $file = \Storage::put(\Auth::user()->id.'/results',$request->result_snap);
        $result->path = $file;
        $result->save();
        return redirect()->route('results.index');
    }
    
    
}

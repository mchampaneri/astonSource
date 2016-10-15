<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use JavaScript;


class ResultController extends Controller
{
    protected  $allow = ['jpg','png'];

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
        
        $ext =  $request->file('result_snap')->extension();
        if( in_array($ext,$this->allow))
        {
            $result = new Result();
            $result->title = $request->title;
            $result->user_id = \Auth::user()->id;
            $file = \Storage::put(\Auth::user()->id . '/results', $request->result_snap);
            $result->path = $file;
            $result->save();
            flash()->success('Result Stored Successfully');
            return redirect()->route('results.index');
        }
        else{
            flash()->warning('We only support .jpg and .png files ');
            return redirect()->route('results.index');
        }
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
        $ext =  $request->file('result_snap')->extension();
        if( in_array($ext,$this->allow)) {
            $result = Result::find($id);
            $result->title = $request->title;
            $result->user_id = \Auth::user()->id;
            $file = \Storage::put(\Auth::user()->id . '/results', $request->result_snap);
            $result->path = $file;
            $result->save();
            flash()->success('Result Updated Successfully');
            return redirect()->route('results.index');
        }
        else{
            flash()->warning('We only support .jpg and .png files ');
            return redirect()->route('results.index');
        }
    }
    
    public function destroy($id)
    {
        $result = Result::find($id);
        $result->delete();
        flash()->success('Result Deleted Successfully');
        return redirect()->route('results.index');
    }
}

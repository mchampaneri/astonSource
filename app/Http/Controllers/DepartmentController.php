<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('workspace.admin.departments.index')
                    ->with(['departments'=>$departments]);
    }

    public function create()
    {
        return view('workspace.admin.departments.create');
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('workspace.admin.departments.edit')
                    ->with(['department'=>$department]);
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->hod_id = 0;
        $department->save();

        return redirect()->route('departments.index');
    }

    public function update($id,Request $request)
    {
        $department = Department::find($id);
        $department->name = $request->name;
        
        if( $department->hod_id != 0 )
        {

            User::find($department->hod_id)->update(['role'=>3]);
        }
        $department->hod_id = $request->hod_id;

        User::find($request->hod_id)->update(['role' => 2]);

        $department->save();

        return redirect()->route('departments.index');
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        if($department->persons()->count() == 0)
        {
            $department->delete();
            return redirect()->route('departments.index');
        }
        else
            return redirect()->route('departments.index');
    }

}

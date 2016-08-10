<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use App\User;
use Illuminate\Http\Request;


class DepartmentController extends Controller
{
    public function index()
    {
        return view('workspace.admin.department.index');
    }

    public function create()
    {
        return view('workspace.admin.department.create');
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();

        return redirect()->route('workspace.admin.departments.index');
    }

    public function edit($id)
    {
        $department = Department::find($id);
        $faculties = Faculty::where('department_id', $department->id)->get(['name', 'id']);

        return view('workspace.admin.department.edit')->with(['department'  => $department,
                                                                'faculties' => $faculties, ]);
    }

    public function update($id, Request $request)
    {
        $department = Department::find($id);

        $faculty = Faculty::find($department->hod_id);
        $user = User::find($faculty->user_id);
        $user->role = 'faculty';
        $user->save();

        $department->name = $request->name;
        $department->description = $request->description;
        $department->hod_id = $request->hod_id;
        $department->save();


        $faculty = Faculty::find($department->hod_id);
        $user = User::find($faculty->user_id);
        $user->role = 'hod';
        $user->save();

        return redirect()->route('workspace.admin.departments.index');
    }
}

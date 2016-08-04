<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

use App\Http\Requests;

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
        $department->hod_id = $request->hod_id;

        $department->save();
        return redirect()->route('workspace.admin.departments.index');
    }


}

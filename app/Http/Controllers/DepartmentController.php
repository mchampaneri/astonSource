<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return $departments;
    }

    public function create()
    {
        return "Create A  New Department";
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->hod_id = 0;
        $department->save();

        return "Created A New Department";
    }

    public function update($id,Request $request)
    {
        $department = Department::find($id);
        $department->name = $request->name;
        $department->hod_id = $request->hod_id;
        $department->save();
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        if($department->persons()->count() == 0)
        {
            $department->delete();
            return "deleted";
        }
        else
            return "Can't Delete The Working Department";
    }

}

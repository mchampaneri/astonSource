<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function registerStudent(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'student';
        $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->name = $user->name;
        $student->enrollment_no = $request->enrollment_no;
        $student->sem = $request->sem;
        $student->department_id = $request->department_id;
        $student->phone_no = $request->phone_no;
        $student->address = $request->address;
        $student->status = 0;
        $student->save();

        return redirect()->to('/');
    }

    public function registerFaculty(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'faculty';
        $user->save();

        $faculty = new Faculty();
        $faculty->user_id = $user->id;
        $faculty->name = $user->name;
        $faculty->department_id = $request->department_id;
        $faculty->phone_no = $request->phone_no;
        $faculty->address = $request->address;
        $faculty->info = $request->info;
        $faculty->status = 0;
        $faculty->save();

        return redirect()->to('/');
    }
}

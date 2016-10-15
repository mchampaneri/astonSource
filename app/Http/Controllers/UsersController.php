<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function registerStudent(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sem = $request->sem;
        $user->contact_no = $request->phone_no;
        $user->address = $request->address;
        $user->department_id = $request->department_id;
        $user->password = Hash::make($request->password);
        $user->role = "student";
        $user->save();
        $user->slug = str_slug($request->name.$user->id,'-');
        $user->save();


        $student = new Student();
        $student->user_id  = $user->id;
        $student->enrollment_no = $request->enrollment_no;
        $student->save();

        return redirect()->to('/');
    }

    public function registerFaculty(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sem = $request->sem;
        $user->contact_no = $request->phone_no;
        $user->address = $request->address;
        $user->department_id = $request->department_id;
        $user->password = Hash::make($request->password);
        $user->role = "student";
        $user->save();
        $user->slug = str_slug($request->name.$user->id,'-');
        $user->save();

        $faculty = new Faculty();
        $faculty->user_id  = $user->id;
        $faculty->info = $request->info;
        $faculty->save();

        return redirect()->to('/');
    }
}

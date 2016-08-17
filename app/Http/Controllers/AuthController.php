<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return "Welcome on login screen";
    }

    public  function  authenticate(Request $request)
    {
        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...

            if(\Auth::user()->role == "student")
            {
                Session::put('name',\Auth::user()->student()->name);
                Session::put('sem',\Auth::user()->sem);
                Session::put('id',\Auth::user()->student()->id);
                Session::put('dept_id',\Auth::user()->department_id);
                return Session::get('name');
            }

            if(\Auth::user()->role == "faculty")
            {
                Session::put('name',\Auth::user()->faculty()->name);
                Session::put('sem',\Auth::user()->sem);
                Session::put('id',\Auth::user()->faculty()->id);
                Session::put('dept_id',\Auth::user()->department_id);
                return Session::get('name');
            }
            return "Get Authentication";
            //return redirect()->intended('dashboard');
        }
        else{
            return "failed";
        }
    }

    public function regStudent()
    {
        return "Student Registration";
    }

    public function regFaculty()
    {
        return "faculty Registration";
    }

    public function storeStudent(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->department_id = $request->department_id;
        $user->role = "student";
        $user->save();
        $student = new Student();
        $student->user_id = $user->id;
        $student->name = $request->name;
        $student->sem = $request->sem;
        $student->save();
        return "student stored";
    }

    public function storeFaculty(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->role = "faculty";
        $user->department_id = $request->department_id;
        $user->save();
        $faculty = new Faculty();
        $faculty->user_id = $user->id;
        $faculty->name = $request->name;
        $faculty->sem = $request->sem;
        $faculty->save();
        return "faculty stored";
    }


}

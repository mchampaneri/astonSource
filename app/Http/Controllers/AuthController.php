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
                Session::put('name',\Auth::user()->asStudent()->name);
                Session::put('sem',\Auth::user()->asStudent()->sem);
                Session::put('id',\Auth::user()->asStudent()->id);
                Session::put('dept_id',\Auth::user()->department_id);
                Session::put('role','student');

            }

            if(\Auth::user()->role == "faculty")
            {
                Session::put('name',\Auth::user()->asFaculty()->name);
                Session::put('id',\Auth::user()->asFaculty()->id);
                Session::put('dept_id',\Auth::user()->asFaculty()->department_id);
                Session::put('role','faculty');
                Session::put('hod',\Auth::user()->asFaculty()->is_hod);
            }

            if(\Auth::user()->role == "admin")
            {
                Session::put('role','admin');
            }
                  return redirect()->intended('workspace/'.\Auth::user()->role);
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

        $user->role = "student";
        $user->save();
        $student = new Student();
        $student->user_id = $user->id;
        $student->name = $request->name;
        $student->department_id = $request->department_id;
        $student->sem = $request->sem;
        $student->enrollno = $request->enrollno;
        $student->contactno = $request->contactno;
        $student->address = $request->address;
        $student->save();
        return "Thanks For registrtion, Now please contact hod to activate your account";
    }

    public function storeFaculty(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->role = "faculty";
        $user->save();
        $faculty = new Faculty();
        $faculty->user_id = $user->id;
        $faculty->name = $request->name;
        $faculty->contactno = $request->contactno;
        $faculty->address = $request->address;
        $faculty->info = $request->info;
        $faculty->department_id = $request->department_id;
        $faculty->is_hod = false;
        $faculty->save();
        return "Thanks For registrtion, Now please contact hod to activate your account";
    }

    public function signout()
    {

         \Auth::logout();
         Session::flush();
        return redirect()->to('/');
    }


}

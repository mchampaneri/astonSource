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
        return redirect()->to('/login');
    }

    public  function  authenticate(Request $request)
    {
        /*
         * Clearing the previous login to zero state
         */
        if(\Auth::check())
        {
            return redirect()->route('logout');
        }

        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {

                flash()->success("welcome ".\Auth::user()->name);

                return redirect()->intended('workspace/'.\App\User::RoleMap(\Auth::user()->role).'/home');
        }
        else{
            flash()->warning("Wrong Id Or Password ");
            return redirect()->to('/login');
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

        //Generating The User Account
        $user = new User();
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->name = $request->name;
        $user->contact_no = $request->contactno;
        $user->address = $request->address;
        $user->department_id = $request->department_id;
        $user->sem = $request->sem;
        $user->role = 4;
        $user->slug = 'noslug';
        $user->save();
        $user->slug = str_slug($request->name.$user->id);
        $user->save();

        //Generating The Student Account;
        $student = new Student();
        $student->user_id = $user->id;
        $student->enrollno = $request->enrollno;
        $student->save();

        return view('front.register.thanks')->with(['user'=>$user]);
    }

    public function storeFaculty(Request $request)
    {
        //Generating User Account
        $user = new User();
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->name = $request->name;
        $user->contact_no = $request->contactno;
        $user->address = $request->address;
        $user->department_id = $request->department_id;
        $user->role = 3;
        $user->slug = 'noslug';
        $user->save();
        $user->slug = str_slug($request->name.$user->id);
        $user->save();


        //Generating The Faculty Account;
        $faculty = new Faculty();
        $faculty->user_id = $user->id;
        $faculty->info = $request->info;
        $faculty->save();
        return view('front.thanks')->with(['user'=>$user]);
    }

    public function signout()
    {

        \Auth::logout();
        Session::flush();
        return redirect()->to('/');
    }


}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentUserVerificationController extends Controller
{
    public function index()
    {
        $users = User::inactive()->get();
        return view('workspace.faculty.hod.verifications.index')->with(['users'=>$users]);
    }

    public  function show($id)
    {
        $user = User::find($id);
        return view('workspace.faculty.hod.verifications.detail')->with(['user'=>$user]);
    }

    public function update($id)
    {
        User::find($id)->update(['state'=>'1']);
        return redirect()->route('verify.index');
    }
}

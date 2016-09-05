<?php

use Illuminate\Http\Request;


Route::get('/register',['as'=>'register.home',function() {
    return view('front.register.index');
}]);

Route::get('/register/student',['as'=>'register.student',function() {
    $departments = App\Department::lists('name','id');
    return view('front.register.student')->with(['departments'=>$departments]);
}]);

Route::get('/register/faculty',['as'=>'register.faculty',function() {
    $departments = App\Department::lists('name','id');
    return view('front.register.faculty')->with(['departments'=>$departments]);
}]);

Route::post('/register/student',['as'=>'register.student.store','uses'=>'UsersController@registerStudent']);
Route::post('/register/faculty',['as'=>'register.faculty.store','uses'=>'UsersController@registerFaculty']);

Route::get('/login',['as'=>'login.home',function() {
    return view('front.login.index');
}]);

Route::post('/login',['as'=>'login.auth', function(Request $request) {

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed...
        if(Auth::user()->role == "student")
            return redirect()->route('workspace.student.dashboard');

        if(Auth::user()->role == "admin")
            return redirect()->route('workspace.admin.dashboard');

        if(Auth::user()->role == "faculty" || Auth::user()->role == "hod")
            return redirect()->route('workspace.faculty.dashboard');
    }
    return redirect()->route('login.home');
}]);

Route::get('/logout',['as'=>'logout',function() {
    Auth::logout();
    return redirect()->to('/');
}]);

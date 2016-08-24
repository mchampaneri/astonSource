<?php


Route::get('/',function() {
    return " Working On The Fronend :-)";
});

Route::get('/login',function() {
    return view('front.authentication.login');
});

Route::get('/logout',['as'=>'logout','uses'=>'AuthController@signout']);
Route::post('/login',['as'=>'login','uses'=>'AuthController@authenticate']);

Route::get('/register',function() {
    return view('front.authentication.register');
});

Route::get('/register/student',['as'=>'register.student' ,function() {
    return view('front.register.student');
}]);

Route::post('/register/student',['as'=>'register.student','uses'=>'AuthController@storeStudent']);

Route::post('/register/faculty',['as'=>'register.faculty','uses'=>'AuthController@storeFaculty']);
Route::get('/register/faculty',['as'=>'register.faculty' ,function() {
    return view('front.register.faculty');
}]);




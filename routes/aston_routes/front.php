<?php


Route::get('/',function() {
    return " Working On The Fronend :-)";
});

Route::get('/login',function() {
    return view('front.authentication.login');
});

Route::get('/register',function() {
    return view('front.authentication.register');
});

Route::get('/register/student',['as'=>'register.student' ,function() {
    return view('front.register.student');
}]);

Route::get('/register/faculty',['as'=>'register.faculty' ,function() {
    return view('front.register.faculty');
}]);
<?php


Route::get('/login',function() {
    return view('front.authentication.login');
});

Route::get('/register',function() {
    return view('front.authentication.register');
});
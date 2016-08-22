<?php

Route::group(['prefix'=>'student','middleware'=>'student'],function() {

    Route::get('/',function(){
        return "Student Home Page";
    });
    
    Route::resource('assignment','SubmissionController');
});
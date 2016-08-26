<?php

Route::group(['prefix' => "faculty",'middleware'=>'faculty'] , function() {

    Route::get('/home',function(){
        return view('workspace.faculty.dashboard.index');
    });

    Route::group(['middleware'=>'hod'],function() {
        Route::resource('subjects', 'SubjectController');
    });

    Route::resource('assignments','AssignmentController');
    Route::resource('questions','QuestionController');
    Route::resource('lectures','LectureController');
    Route::resource('posts','PostController');
});
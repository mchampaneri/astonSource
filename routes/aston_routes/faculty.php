<?php

Route::group(['prefix' => "faculty"] , function() {

    Route::get('/',function(){
        return view('workspace.faculty.dashboard.index');
    });

    Route::resource('subjects','SubjectController');

    Route::resource('assignments','AssignmentController');

    Route::resource('questions','QuestionController');
});
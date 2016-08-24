<?php

Route::group(['prefix'=>'student','middleware'=>'student'],function() {

    Route::get('/',function(){
        return view('workspace.student.dashboard.index');
    });
    
    Route::resource('assignment','SubmissionController');

    Route::resource('answers','AnswerController');

    Route::resource('results','ResultController');

});

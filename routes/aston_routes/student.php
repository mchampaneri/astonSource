<?php

Route::group(['prefix'=>'student','middleware'=>'student'],function() {

    Route::get('/home',function(){
        return view('workspace.student.dashboard.index');
    });
    
    Route::resource('submits','SubmissionController');

    Route::resource('answers','AnswerController');

    Route::resource('results','ResultController');

});

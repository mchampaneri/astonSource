<?php

// Faculty Routes
Route::group(['prefix'=>'faculty','middleware'=>'faculty'],function() {

    Route::get('/',['as'=>'workspace.faculty.dashboard',function(){
        return view('workspace/faculty/dashboard/index');
    }]);

    Route::resource('assingments','AssingmentController');
    Route::resource('assingments.questions','QuestionController');

    // Purely Hod Task Routes
    Route::group(['prefix'=>'hod_tasks','middleware'=>'hod'],function() {

        Route::resource('subjects','SubjectController');
    });

});

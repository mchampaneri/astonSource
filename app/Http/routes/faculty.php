<?php

Route::group(['prefix'=>'faculty'],function() {

    Route::get('/',['as'=>'workspace.faculty.dashboard',function(){
        return view('workspace/faculty/dashboard/index');
    }]);

    Route::resource('subjects','SubjectController');
});

<?php


Route::group(['prefix'=>'admin'],function() {

    Route::get('/',function (){ return view('workspace.admin.dashboard.index');});

    Route::resource('departments','DepartmentController');

});
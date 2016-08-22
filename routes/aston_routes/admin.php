<?php


Route::group(['prefix'=>'admin','middleware'=>'admin'],function() {

    Route::get('/',function (){ return view('workspace.admin.dashboard.index');});

    Route::resource('departments','DepartmentController');

});
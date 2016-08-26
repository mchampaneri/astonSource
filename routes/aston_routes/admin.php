<?php


Route::group(['prefix'=>'admin','middleware'=>'admin'],function() {

    Route::get('/home',function (){ return view('workspace.admin.dashboard.index');});

    Route::resource('departments','DepartmentController');

});
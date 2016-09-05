<?php

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){

    Route::get('/',['as'=>'workspace.admin.dashboard',function() {
        return view('workspace/admin/dashboard/index');
    }]);

    Route::resource('departments','DepartmentController');
});
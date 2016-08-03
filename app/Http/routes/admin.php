<?php

Route::group(['prefix'=>'admin'],function(){

    Route::get('/',['as'=>'workspace.admin.dashboard',function() {
        return view('workspace/admin/dashboard/index');
    }]);

    Route::resource('departments','DepartmentController');
});
<?php

Route::group(['prefix' => 'student'], function()
{
    Route::get('/',['as'=>'workspace.student.dashboard', function()
    {
        return view('workspace/student/dashboard/index');
    }]);
});
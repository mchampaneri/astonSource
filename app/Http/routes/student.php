<?php

Route::group(['prefix' => 'student','middleware'=>'student'], function()
{
    Route::get('/',['as'=>'workspace.student.dashboard', function()
    {
        return view('workspace/student/dashboard/index');
    }]);
});
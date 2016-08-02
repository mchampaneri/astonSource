<?php

Route::group(['prefix' => 'student'], function()
{
    Route::get('/', function()
    {
        return view('workspace/student/index');
    });
});
<?php


Route::group(['prefix'=>'admin','middleware'=>'admin'],function() {

    Route::get('/home',['as'=>'admin.home','uses'=>'DashboardController@admin']);

    Route::resource('departments','DepartmentController');

});
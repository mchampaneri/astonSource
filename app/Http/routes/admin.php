<?php

Route::group(['prefix'=>'admin'],function(){

    Route::get('/',function(){
        return view('workspace/admin/index');
    });
});
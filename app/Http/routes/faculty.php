<?php

Route::group(['prefix'=>'faculty'],function() {

    Route::get('/',function(){
        return view('workspace/faculty/index');
    });
});
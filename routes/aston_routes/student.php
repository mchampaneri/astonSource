<?php

Route::group(['prefix'=>'student'],function() {

    Route::resource('assignments','SubmissionController');
    Route::resource('answers','AnswerController');
});
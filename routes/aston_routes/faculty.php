<?php

Route::group(['prefix' => "faculty",'middleware'=>'faculty'] , function() {

    Route::get('/home',['as'=>'faculty.home','uses'=>'DashboardController@faculty']);

    Route::group(['middleware'=>'hod'],function() {
        Route::resource('subjects', 'SubjectController');
        Route::resource('verify','DepartmentUserVerificationController');
    });

    Route::resource('assignments','AssignmentController');
    Route::get('assignements/checklist/{id}',['as'=>'assignments.submitlist','uses'=>'AssignmentController@submitlist']);
    Route::get('assignements/answersof/{submitid}',
        ['as'=>'assignments.answersof','uses'=>'AssignmentController@answersof']);

    Route::post('assignements/accept/{submitid}',
        ['as'=>'assignments.accept','uses'=>'AssignmentController@accept']);
    Route::post('assignements/reject/{submitid}',
        ['as'=>'assignments.reject','uses'=>'AssignmentController@reject']);

    Route::resource('questions','QuestionController');
    Route::resource('lectures','LectureController');
    Route::resource('posts','PostController');
});
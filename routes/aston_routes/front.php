<?php


Route::get('/',function() { return view('welcome'); });


/********** Faculty Dominenet Routes *********************************************************/
Route::get('/faculties', ['as' => 'faculty.all', 'uses' => 'FrontFacultyController@index']);

Route::get('/faculty/{id}', ['as' => 'faculty.id', 'uses' => 'FrontFacultyController@faculty']);

Route::get('/faculty/{faculty_id}/subject/{subject_id}', ['as' => 'faculty.id.subject', 'uses' => 'FrontFacultyController@facultySubject']);

Route::get('/faculty/{id}/subject/{id2}/lecture/{id3}', ['as' => 'faculty.lecture.id', 'uses' => 'FrontFacultyController@facultySubjectLecture']);

/********************** Authentication Routes *************************************************/

Route::group(['middleware'=>'guest'],function () {

    Route::get('/login', function () {
        return view('front.authentication.login');
    });

    Route::post('/login', ['as' => 'login', 'uses' => 'AuthController@authenticate']);

    Route::get('/register', function () {
        return view('front.authentication.register');
    });
    Route::get('/register/student', ['as' => 'register.student', function () {
        return view('front.register.student');
    }]);
    Route::post('/register/student', ['as' => 'register.student', 'uses' => 'AuthController@storeStudent']);

    Route::post('/register/faculty', ['as' => 'register.faculty', 'uses' => 'AuthController@storeFaculty']);
    Route::get('/register/faculty', ['as' => 'register.faculty', function () {
        return view('front.register.faculty');
    }]);

});
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@signout']);
/************************************ Post Deminent Routes *************************************/
Route::get('/posts/all', ['as'=>'post.all','uses'=>'FrontPostController@index']);

Route::get('/post/{id}', ['as'=>'post.id', 'uses'=>'FrontPostController@show']);

Route::get('/posts/by/{id}',['as'=>'post.by.id' , 'uses'=>'FrontPostController@postsBy']);




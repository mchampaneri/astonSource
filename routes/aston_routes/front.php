<?php


use App\Faculty;
use App\Lecture;
use App\Subject;

Route::get('/faculties', ['as' => 'faculty.all', 'uses' => 'FrontFacultyController@index']);

Route::get('/faculty/{id}', ['as' => 'faculty.id', 'uses' => 'FrontFacultyController@faculty']);

Route::get('/faculty/{faculty_id}/subject/{subject_id}', ['as' => 'faculty.id.subject', 'uses' => 'FrontFacultyController@facultySubject']);

Route::get('/faculty/{id}/subject/{id2}/lecture/{id3}', ['as' => 'faculty.lecture.id', 'uses' => 'FrontFacultyController@facultySubjectLecture']);


Route::get('/login', function () {
    return view('front.authentication.login');
});

Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@signout']);
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

Route::get('/posts/all', function () {
    return view('front.blog.index');
});

Route::get('/post/{id}', function ($id) {
    $post = \App\Post::find($id);
    return view('front.blog.detail')->with(['post' => $post]);
});

Route::get('/posts/by/{id}', function ($id) {
    $posts = \App\Post::where('user_id', $id)->get();
    return view('front.blog.index')->with(['posts' => $posts]);
});




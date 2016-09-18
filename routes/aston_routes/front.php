<?php


use App\Faculty;
use App\Lecture;
use App\Subject;

Route::get('/',function() {
    return view('front.index');
});

Route::get('/department/{name}',function($name) {
    return view('front.department')->with(['department'=>$name]);
});

Route::get('/faculty/{id}',function ($id) {
    $faculty = Faculty::find($id);
    $subjects = $faculty->subjects()->get();
    $posts = $faculty->user()->posts()->take(5)->get();
    return view('front.faculty.index')->with(['faculty'=>$faculty,'subjects'=>$subjects,'posts'=>$posts]);
});

Route::get('/faculty/{id}/subject/{id2}',function ($id,$id2) {
    $faculty = Faculty::find($id);
    $user_id = $faculty->user_id;
    $subject = Subject::find($id2)->first(['name','id']);
    $lectures = Lecture::where('user_id',$user_id)
                        ->where('subject_id',$id2)
                        ->get();
    return view('front.faculty.lecture-list')->with(['faculty'=>$faculty,'lectures'=>$lectures,'subject'=>$subject]);
});


Route::get('/faculty/{id}/subject/{id2}/lecture/{id3}',function ($id,$id2,$id3) {
    $faculty = Faculty::find($id);
    $subject_name = Subject::find($id2)->name;
    $lecture = Lecture::find($id3);
    return view('front.faculty.lecture')->with(['faculty'=>$faculty,'lecture'=>$lecture,'Subject_Name'=>$subject_name]);

});

Route::get('/login',function() {
    return view('front.authentication.login');
});

Route::get('/logout',['as'=>'logout','uses'=>'AuthController@signout']);
Route::post('/login',['as'=>'login','uses'=>'AuthController@authenticate']);

Route::get('/register',function() {
    return view('front.authentication.register');
});

Route::get('/register/student',['as'=>'register.student' ,function() {
    return view('front.register.student');
}]);

Route::post('/register/student',['as'=>'register.student','uses'=>'AuthController@storeStudent']);

Route::post('/register/faculty',['as'=>'register.faculty','uses'=>'AuthController@storeFaculty']);
Route::get('/register/faculty',['as'=>'register.faculty' ,function() {
    return view('front.register.faculty');
}]);

Route::get('/posts/all',function (){
    return view('front.blog.index');
});

Route::get('/post/{id}',function ($id){
    $post = \App\Post::find($id);
    return view('front.blog.detail')->with(['post'=>$post]);
});

Route::get('/posts/by/{id}',function($id){
    $posts = \App\Post::where('user_id',$id)->get();
    return view('front.blog.index')->with(['posts'=>$posts]);
});




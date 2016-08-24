<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

require 'aston_routes/front.php';

Route::group(['prefix'=>'workspace','middleware'=>'auth'],function () {

    Route::get('/images/{id}/results/{file}', function ($id,$filename)
    {
        $path = storage_path().'/app/'. $id . '/results/' . $filename;

        if(!File::exists($path)) abort(404);

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });

    Route::resource('messages','MessageController');
    Route::get('/messages/sent/show','MessageController@sent');
    require 'aston_routes/admin.php';

    require 'aston_routes/faculty.php';

    require 'aston_routes/student.php';

});
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



    require 'aston_routes/admin.php';

    require 'aston_routes/faculty.php';

    require 'aston_routes/student.php';

});
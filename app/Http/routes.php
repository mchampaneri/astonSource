<?php

    /** Front end routes */
    require 'routes/front.php';

    /** Authentication Routes */
    require 'routes/auth.php';

Route::group(['prefix'=>'workspace','middleware'=>'auth'],function() {

    /** Student routes */
    require 'routes/student.php';

    /** Faculty routse */
    require 'routes/faculty.php';

    /** Admin routes */
    require 'routes/admin.php';


});
<?php


/*
 * Loading the Posts Images
 *
 */

Route::get('/images/{id}/posts/images/{filename}', function ($id,$filename)
{

    $path = storage_path().'/app/'. $id . '/posts/images/' . $filename;
//    return $path;
    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


/*
 * Loading the Lecture Images
 *
 */

Route::get('/images/{id}/lectures/images/{filename}', function ($id,$filename)
{

    $path = storage_path().'/app/'. $id . '/lectures/images/' . $filename;
//    return $path;
    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

/*
 * Loading the Result Thumbs
 *
 */

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

/*
 * Loading The Post Thumbs
 */

Route::get('/images/{id}/posts/thumb/{file}', function ($id,$filename)
{
    $path = storage_path().'/app/'. $id . '/posts/thumb/' . $filename;

    if(!File::exists($path))$path = asset('/images/mi.jpg');;


    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/images', function()
{
    $path = public_path().'/images/mi.jpg';

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

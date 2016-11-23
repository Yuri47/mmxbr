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



Route::get('/', function () {
    return view('newpage');
});
// Route::get('/new', function () {
//     return view('newpage');
// });
Route::get('/services', function () {
    return view('services');
});
Route::get('/teste', function () {
    return view('teste');
});

Route::post('mail', 'MailController@Send');

 

Route::get('/services/conserto-de-fonte-de-notebook', function () {
    return view('pages.fonte');
});
Route::get('/site', function () {
    return view('pages.site');
});


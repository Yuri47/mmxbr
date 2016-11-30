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
Route::get('/criarsites', function () {
    return view('pages.site');
});
Route::get('/dicas', 'TipsController@showAllTips');

Route::get('/services/reparo-na-entrada-do-carregador-do-notebook', function () {
    return view('pages.reparoEntradaCarr');
});

Route::get('/services/reparos-em-notebooks', function () {
    return view('pages.reparoNotebook');
});
Route::get('/services/instalacao-de-bulk-ink', function () {
    return view('pages.bulkink');
});
Route::get('/services/manutencao-de-computadores-e-notebooks', function () {
    return view('pages.manutencao');
});

Route::get('/services/recarga-de-cartucho', function () {
    return view('pages.recarga');
});


Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/admin/newpost', 'TipsController@newpost');
Route::get('/dicas', 'TipsController@showAllTips');


 

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ladingpage', function () {
    return view('landingpage');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});



Route::get('usuarios','UsersController@index');
Route::post('/usuarios/cadastrar','UsersController@insert');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'socialcontroler@redirect');
Route::get('/callback', 'socialcontroler@callback');
Route::resource('/horario', 'HorarioController');
Route::resource('/docente', 'DocenteController');

Route::resource('/materia', 'MateriaController');
Route::resource('/aula', 'AulaController');
Route::resource('/carrera', 'CarreraController');
Route::post('/docente', 'DocenteController@create');




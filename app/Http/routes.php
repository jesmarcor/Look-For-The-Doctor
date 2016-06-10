<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MedicosController@home');

Route::get('/listaMedicos', 'MedicosController@show');

Route::get('/listaMedicos/{id}', 'MedicosController@showOne');

Route::get('/listaMedicos/{medico}/edit', 'MedicosController@edit');

Route::patch('listaMedicos/{id}', 'MedicosController@update');

Route::delete('listaMedicos/{id}', 'MedicosController@delete');

Route::get('/registro/medico', 'MedicosController@register');

Route::post('/registro/medico', 'MedicosController@store');

Route::get('/registro/centroMedico', 'CentrosMedicosController@register');

Route::get('/registro/paciente', 'PacientesController@register');

Route::get('/login', 'PacientesController@login');

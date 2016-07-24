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

Route::get('/', 'FrontController@index');
Route::get('administrador', 'FrontController@administrador');
Route::get('perfil', 'FrontController@perfil');

Route::post('encuestador', 'EncuestadorController@create');

//Route::get('pregunta/edit/{id}',[ 'uses' => 'PreguntaController@edit', 'as' =>'preferencia/item']);
Route::get('preferencia/item/{id}',[ 'uses' => 'PreferenciaController@item', 'as' =>'preferencia/item']);

Route::resource('preferencia', 'PreferenciaController');
Route::resource('pregunta', 'PreguntaController');
Route::resource('encuesta', 'EncuestaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('encuestado', 'EncuestadoController');


Route::resource('registro', 'RegistroController');
Route::auth();

Route::get('/home', 'HomeController@index');

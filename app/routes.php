<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	Auth::logout();
	return View::make('login');

});

Route::controller('autenticacao', 'AutenticacaoController');
Route::controller('registar','RegistarController');
Route::controller('consulta', 'ConsultaController');
Route::controller('paciente','PacienteController');
Route::controller('agenda','AgendaController');
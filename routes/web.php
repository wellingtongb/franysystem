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
    return view('/layout.app');
});
Route::get('/index', function(){
    return view('index');
});

//lista pacientes
Route::get('/pacientes', 'PacienteControlador@index');
//cria pacientes
Route::get('/paciente/novo', 'PacienteControlador@create');
//insere no banco
Route::post('/paciente', 'PacienteControlador@store');
//deletar paciente
Route::get('/paciente/remove/{id}', 'PacienteControlador@destroy');
//editapaciente
Route::get('/paciente/edita/{id}', 'PacienteControlador@edit');
//salva o registro editado
Route::post('/paciente/{id}', 'PacienteControlador@update');


//Agenda routes
Route::get('/paciente/agendar', function(){
    return view('agendaPaciente');
});
Route::get('/agenda', 'AgendaControlador@index');
Route::get('/agenda/novo', 'AgendaControlador@create');
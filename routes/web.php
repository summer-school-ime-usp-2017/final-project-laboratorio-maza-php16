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

//Roteamento para os Pacientes
Route::get('/pacientes', 'PacienteController@index');
Route::get('/pacientes/cria', 'PacienteController@cria');
Route::get('/pacientes/{paciente}', 'PacienteController@show');
Route::get('/pacientes/{paciente}/edita', 'PacienteController@edita');
Route::post('/pacientes', 'PacienteController@armazena');
Route::patch('/pacientes/{paciente}', 'PacienteController@atualiza');

//Roteamento para os Medicos
Route::get('/medicos', 'MedicoController@index');
Route::get('/medicos/cria', 'MedicoController@cria');
Route::get('/medicos/{medico}', 'MedicoController@show');
Route::get('/medicos/{medico}/edita', 'MedicoController@edita');
Route::post('/medicos', 'MedicoController@armazena');
Route::patch('/medicos/{medico}', 'MedicoController@atualiza');

//Roteamento para os Exames
Route::get('/exames', 'ExameController@index');
Route::get('/exames/cria', 'ExameController@cria');
Route::get('/exames/{exame}', 'ExameController@show');
Route::get('/exames/{exame}/edita', 'ExameController@edita');
Route::post('/exames', 'ExameController@armazena');
Route::patch('/exames/{exame}', 'ExameController@atualiza');

// Roteamento para os Pedidos
Route::get('/pedidos', 'PedidoController@index');
Route::get('/pedidos/cria', 'PedidoController@cria');
Route::get('/pedidos/show/{pedido}', 'PedidoController@show');
Route::post('/pedidos', 'PedidoController@armazena');

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

Route::get('usuarios', 'UsuariosController@index');
   



Route::group(['middleware'=> 'web'], function(){

    Route::get('/', 'HomeController@index');

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('clientes', 'ClienteController@index');
    Route::get('clientes/novo', 'ClienteController@novo');
    Route::get('clientes/{cliente}/editar', 'ClienteController@editar');
    Route::get('clientes/{cliente}/excluir', 'ClienteController@excluir');
    Route::post('clientes/salvar', 'ClienteController@salvar');
    //Route::post('clientes/post', 'ClienteController@post');
     Route::post('clientes/pesquisar', 'ClienteController@pesquisar');
    Route::patch('clientes/{cliente}', 'ClienteController@atualizar');

     Route::get('treino', 'ExerciciosController@index');
     Route::get('treino.lista', 'TreinoController@index');
     Route::post('treino/salvar', 'TreinoController@salvar');
     Route::get('treino/novo', 'TreinoController@novo');
     Route::get('treino/{treino}/editar', 'TreinoController@editar');
    Route::patch('treino/{treino}', 'TreinoController@atualizar');
   //Route::patch('clientes/{cliente}', 'ClienteController@atualizar');


    Route::get('pagar', 'PagarController@index');
     Route::get('pagar/novo', 'PagarController@novo');
    Route::post('pagar/salvar', 'PagarController@salvar');
    Route::post('pagar/pesquisar', 'PagarController@pesquisar');
    Route::get('pagar/{conta_pagar}/editar', 'PagarController@editar');
    Route::patch('pagar/{conta_pagar}', 'PagarController@atualizar');



    Route::get('receber', 'ReceberController@index');
     Route::get('receber/novo', 'ReceberController@novo');
    Route::post('receber/salvar', 'ReceberController@salvar');
    Route::post('receber/pesquisar', 'ReceberController@pesquisar');
    Route::get('receber/{conta_pagar}/editar', 'ReceberController@editar');
    Route::patch('receber/{conta_pagar}', 'ReceberController@atualizar');

   

    Route::get('funcionarios', 'FuncionarioController@index');
    Route::get('funcionarios/novo', 'FuncionarioController@novo');
    Route::get('funcionarios/{funcionario}/editar', 'FuncionarioController@editar');
    Route::post('funcionarios/salvar', 'FuncionarioController@salvar');
    Route::patch('funcionarios/{funcionario}', 'FuncionarioController@atualizar');


    //Route::get('teste', 'Contas_PagarController@index');

});
<?php

use Src\Route as Route;

Route::get('/', 'indexController@index');

Route::get('/sair', 'userController@sair');

Route::get('/login', 'userController@login');
Route::post('/login', 'userController@loginUp');

Route::get('/user', 'userController@cadastro');
Route::post('/user', 'userController@postCadastro');

Route::get('/create/produto', 'produtoController@cadastro');
Route::post('/create/produto', 'produtoController@postCadastro');

Route::get('/inventario', 'inventarioController@inventario');
Route::post('/inventario', 'inventarioController@delete');
Route::post('/quantidade/inventario', 'inventarioController@quantidade');

Route::get('/caixa', 'caixaController@caixa');
Route::post('/caixa', 'caixaController@include');

Route::get('/relatorio', 'relatorioController@relatorio');
Route::post('/relatorio', 'relatorioController@postRelatorio');
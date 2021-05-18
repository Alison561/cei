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

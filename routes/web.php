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
    return view('app');
});

// Route::get('medicao', function () {
//     return view('medicao/inicial');
// });

// Route::post('organizacao/listar', function () {
//     return view('organizacao/inicial');
// });

Route::post('organizacao/listar', 'OrganizacaoController@listar');
Route::post('organizacao/nova', 'OrganizacaoController@nova');
Route::post('organizacao/inserir', 'OrganizacaoController@inserir');
Route::post('organizacao/deletar', 'OrganizacaoController@deletar');
Route::post('organizacao/editar', 'OrganizacaoController@editar');
Route::post('organizacao/atualizar', 'OrganizacaoController@atualizar');

// Route::resource('app', 'AppController');

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

Route::get('medicao', function () {
    return view('medicao/inicial');
});

Route::get('organizacao/listar', function () {
    return view('organizacao/inicial');
});

$router->post('organizacao/list', 'ContactsController@create');

// Route::resource('app', 'AppController');

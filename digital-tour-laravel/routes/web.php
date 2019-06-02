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

Route::get('/home', 'PaginasController@mostrarHome');

Route::get('/cadastro', 'PaginasController@mostrarCadastro');

Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos');

Route::get('/faq', 'PaginasController@mostrarFaq');

Route::get('/contato', 'PaginasController@mostrarContato');

Route::get('/posts', 'PaginasController@mostrarPosts');

Route::get('/perfil', 'PaginasController@mostrarPerfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

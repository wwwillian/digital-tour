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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'PaginasController@mostrarIndex')->name('index');

Route::get('/cadastro', 'PaginasController@mostrarCadastro')->name('cadastro');

Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos')->name('quemsomos');

Route::get('/faq', 'PaginasController@mostrarFaq')->name('faq');

Route::get('/contato', 'PaginasController@mostrarContato')->name('contato');

Route::get('/posts', 'PaginasController@mostrarPosts')->name('posts');

Route::get('/perfil', 'PaginasController@mostrarPerfil')->name('perfil');

Route::get('/artigos', 'PaginasController@mostrarArtigos')->name('artigos');


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

Route::group(['middleware'=>'auth'], function (){
    Route::get('chat', 'Chat\ChatController@mostrarChat')->name('chat');

    Route::get('chat/messages', 'Chat\ChatController@messages')->name('messages');
    Route::post('chat/message', 'Chat\ChatController@store')->name('store');

    Route::get('/editar-perfil', 'User\UserController@profile')->name('profile');
    Route::post('/editar-perfil', 'User\UserController@profileUpdate')->name('profileUpdate');

    Route::get('home', 'HomeController@index')->name('home');

    Route::post('home/posts', 'HomeController@postsUpdate')->name('postsUpdate');
    Route::get('home/comments', 'CommentsController@mostarComments')->name('mostrarComments');
    Route::post('home/comments', 'CommentsController@comments')->name('comments');

    Route::get('perfil', 'PerfilController@mostrarPerfil')->name('perfil');

    Route::get('perfil/amigos', 'PerfilController@mostrarAmigos')->name('mostrarAmigos');
    Route::post('perfil/amigos', 'AmigosController@pesquisarAmigos')->name('pesquisarAmigos');

    Route::get('perfil/photos', 'PerfilController@exibirFotos')->name('exibirFotos');
    Route::post('perfil/photos', 'PerfilController@gallerysUpdate')->name('gallerysUpdate');

    Route::get('perfil/videos', 'PerfilControllers@mostrarvideos')->name('mostrarVideos');
    Route::post('perfil/videos', 'PerfilControllers@videos')->name('videos');

    Route::get('/artigos', 'PaginasController@mostrarArtigos')->name('artigos');

});

Auth::routes();

Route::get('/cadastro', 'PaginasController@mostrarCadastro')->name('cadastro');

Route::get('/faq', 'PaginasController@mostrarFaq')->name('faq');

Route::get('/contato', 'PaginasController@mostrarContato')->name('contato');

Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos')->name('quemsomos');

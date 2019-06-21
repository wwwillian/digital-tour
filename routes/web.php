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

    Route::get('perfil', 'FriendsController@index')->name('perfil'); 

    Route::get('perfil/{id}', 'FriendsController@show')->name('mostrarAmigos');

    Route::get('perfil/photos', 'FriendsController@exibirFotos')->name('exibirFotos');
    Route::post('perfil/photos', 'FriendsController@store')->name('gallerysUpdate');

    Route::get('perfil/videos', 'PerfilControllers@mostrarvideos')->name('mostrarVideos');
    Route::post('perfil/videos', 'PerfilControllers@videos')->name('videos');

    Route::get('/artigos', 'PaginasController@mostrarArtigos')->name('artigos');



});

Auth::routes();

Route::get('/cadastro', 'PaginasController@mostrarCadastro')->name('cadastro');

Route::get('/faq', 'PaginasController@mostrarFaq')->name('faq');

Route::get('/contato', 'PaginasController@mostrarContato')->name('contato');

Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos')->name('quemsomos');

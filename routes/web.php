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

    Route::get('feed', 'HomeController@index')->name('feed');

    Route::post('feed/posts', 'HomeController@postsUpdate')->name('postsUpdate');
    Route::get('feed/comments', 'CommentsController@mostarComments')->name('mostrarComments');
    Route::post('feed/comments', 'CommentsController@comments')->name('comments');

    Route::get('perfil', 'FriendsController@index')->name('perfil');
    Route::post('perfil/posts', 'FriendsController@seusPostsUpdate')->name('seusPostsUpdate');

    Route::get('perfil/{id}', 'FriendsController@show')->name('mostrarAmigos');

    Route::post('perfil/id', 'FriendsController@adicionarAmigo')->name('adicionarAmigo');
    Route::get('/perfil/excluir/{id}', 'FriendsController@destroy')->name('excluirAmigo');

    Route::get('perfil/photos', 'FriendsController@exibirFotos')->name('exibirFotos');
    Route::post('perfil/photos', 'FriendsController@store')->name('gallerysUpdate');

    Route::get('perfil/videos', 'PerfilControllers@mostrarvideos')->name('mostrarVideos');
    Route::post('perfil/videos', 'PerfilControllers@videos')->name('videos');

    Route::get('/amizade', 'AmigosController@mostrarAmigos')->name('amigos');
    Route::any('/pesquisar-amigos','AmigosController@pesquisar')->name('pesquisa');
    Route::get('/gallery', 'PaginasController@mostrarGallery')->name('gallery');
});

Auth::routes();

Route::get('/cadastro', 'PaginasController@mostrarCadastro')->name('cadastro');

Route::get('/faq', 'PaginasController@mostrarFaq')->name('faq');

Route::get('/contato', 'MailController@index')->name('enviando');
Route::post('/contato', 'MailController@postContact')->name('postContact');

Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos')->name('quemsomos');

Route::get('/artigos', 'PaginasController@mostrarArtigos')->name('artigos');

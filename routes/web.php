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

//routes that can only be accessed if you are authenticated
Route::group(['middleware'=>'auth'], function (){
    Route::get('chat', 'Chat\ChatController@mostrarChat')->name('chat');

    Route::get('chat/messages', 'Chat\ChatController@messages')->name('messages');
    Route::post('chat/message', 'Chat\ChatController@store')->name('store');

    Route::get('/editar-perfil', 'User\UserController@profile')->name('profile');
    Route::post('/editar-perfil', 'User\UserController@profileUpdate')->name('profileUpdate');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/perfil', 'PaginasController@mostrarPerfil')->name('perfil');
    Route::get('/artigos', 'PaginasController@mostrarArtigos')->name('artigos');
});

Auth::routes();


// Route::get('/index', 'PaginasController@mostrarIndex')->name('index');

Route::get('/cadastro', 'PaginasController@mostrarCadastro')->name('cadastro');
Route::get('/faq', 'PaginasController@mostrarFaq')->name('faq');
Route::get('/contato', 'PaginasController@mostrarContato')->name('contato');

//Route::get('/posts', 'PaginasController@mostrarPosts')->name('posts');



Route::get('/quemsomos', 'PaginasController@mostrarQuemSomos')->name('quemsomos');

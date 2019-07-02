<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'GalleryController@index');
Route::post('/', 'GalleryController@store');
Route::delete('/{id}', 'GalleryController@destroy');
Route::get('/like/{id}', 'GalleryController@like');

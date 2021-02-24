<?php

Route::get('/', 'HomeController@index');
 
Auth::routes();

Route::middleware(['auth'])->group(function() {
    
    Route::get('home', 'HomeController@index');
    Route::get('/albums', 'AlbumController@index');
    Route::get('/tracks', 'TracksController@index');

    Route::resource('tracks', 'TracksController', ['except' => [ 'destroy']]);
    Route::resource('albums', 'AlbumController', ['except' => [ 'destroy']]);

    Route::get('tracks/delete/{id}', 'TracksController@delete')->name('tracks.delete');
    Route::get('albums/delete/{id}', 'AlbumController@delete')->name('albums.delete');
});   
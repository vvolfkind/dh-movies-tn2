<?php


Route::get('/', function() {
    return view('home');
});

Route::get('/genres', 'GenreController@index');
Route::get('/genres/{id}', 'GenreController@show');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{id}', 'MovieController@show');

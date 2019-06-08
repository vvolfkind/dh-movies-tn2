<?php


Route::get('/', function() {
    return view('home');
});

Route::get('/genres', 'GenreController@index');
Route::get('/genres/{id}', 'GenreController@show');

Route::get('/actors', 'ActorController@index');

Route::get('/movies', 'MovieController@index');

// Devuelve el form
Route::get('/movies/create', 'MovieController@create');

// Procesa el form
Route::post('/movies/create', 'MovieController@store');

Route::get('/movies/{id}', 'MovieController@show');

Route::get('/actor-movie', 'MovieController@actorMovie');

Route::get('/search-actor', 'SearchController@searchActor');


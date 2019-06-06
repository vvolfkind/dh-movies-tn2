<?php

Route::get('/genres', 'GenreController@index');
Route::get('/genres/{id}', 'GenreController@show');

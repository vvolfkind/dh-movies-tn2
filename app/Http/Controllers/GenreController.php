<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{
    public function index()
    {
        $generos =  Genre::all();

        return view('genres')->with('generos', $generos);
    }

    public function show($id)
    {
        $movies = Movie::where('genre_id', $id)->get();
        $genero = Genre::find($id);

        if(count($movies) == 0) {
            return redirect()->back();
        }

        return view('genreMovies')
            ->with('pelis', $movies)
            ->with('elGenero', $genero);
    }

}

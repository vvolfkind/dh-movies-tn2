<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $generos = Genre::all();

        return view('genres')->with('generos', $generos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{

    public function index()
    {
        return view('movies')
            ->with('movies', Movie::all());
    }

    public function show($id)
    {
        return view('movie')
            ->with('movie', Movie::find($id));
    }

}

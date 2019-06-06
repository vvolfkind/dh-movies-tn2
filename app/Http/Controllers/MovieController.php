<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;
use DB;

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

    public function actorMovie()
    {
        $response = array_map(function($val) {
            return [
                Actor::find($val->actor_id)->getNombreCompleto() => Movie::find($val->movie_id)->title
            ];
        }, DB::table('actor_movie')->get()->toArray());

        dd($response);
    }
}

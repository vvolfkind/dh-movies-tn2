<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{

    public function index()
    {
        $actors = Actor::all();
        return view('actores')->with('actors', $actors);
    }


    public function show($id)
    {
        
    }
}

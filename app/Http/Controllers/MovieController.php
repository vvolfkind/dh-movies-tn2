<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;
use DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies')
            ->with('movies', Movie::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reglas = [
            'titulo' => 'required',
            'premios' => 'required',
            'duracion' => 'required',
            'rating' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'anio' => 'required'
        ];
        
        $mensaje = [
            'required' => 'El campo :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensaje);

        $dia = $request->input('dia');
        $mes = $request->input('mes');
        $anio = $request->input('anio');

        $date = date_create($dia . '-' . $mes . '-' . $anio);
        $release_date = date_format($date, "Y-m-d H:i:s");

        $pelicula = new Movie([
            'title' => $request->input('titulo'),
            'awards' => $request->input('premios'),
            'rating' => $request->input('rating'),
            'length' => $request->input('duracion'),
            'release_date' => $release_date
        ]);

        $pelicula->save();

        return redirect()->route('/movies');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('movie')
            ->with('movie', Movie::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function actorMovie()
    {
        $response = array_map(function ($val) {
            return [
                Actor::find($val->actor_id)->getNombreCompleto() => Movie::find($val->movie_id)->title,
            ];
        }, DB::table('actor_movie')->get()->toArray());

        dd($response);
    }
}

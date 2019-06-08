<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchActor(Request $request)
    {
        $busqueda = $request->pollo;
        //Si hay espacios entre las palabras de nuestra query entra a este if
        if (strpos($busqueda, ' ') == true) {
            $nombre = explode(' ', $busqueda);
            $first_name = ucwords(strtolower($nombre[0]));
            $last_name = ucwords(strtolower($nombre[1]));

            $search = Actor::where('first_name', 'LIKE', "%$first_name%")
                            ->where('last_name','LIKE', "%$last_name%")
                            ->first();

            if(count($search) == 0) {
                return redirect()
                    ->back()
                    ->with('error', 'No encontre un Carrizo');
            }

            return view('results')->with('results', $search);
        }

        //Se ejecuta si ingresamos una sola palabra en la query
        $search = Actor::where('first_name', 'LIKE', "%$busqueda%") 
                        ->orwhere('last_name', 'LIKE', "%$busqueda%")
                        ->get();

        if(count($search) == 0) {
            return redirect()
                ->back()
                ->with('error', 'No encontre un Carrizo');
        }

        return view('results')->with('results', $search);

    }
}

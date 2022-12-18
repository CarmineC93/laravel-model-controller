<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //metodo che porta tutti i dati del database in pagina home
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    //metodo per avere tutti i dati del db su altra route/pagina con tutti i movies 
    public function movies()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /*metodo per avere dati del singolo film in una nuova route/pagina, che esegua un controllo nel caso
    di inserimento indice da barra indirizzi. Se l'indice non esiste darà un errore 404 */

    public function show($movieIndex)
    {
        $movies = Movie::all();

        if ($movieIndex >= 0 && $movieIndex < count($movies)) {
            $singleMovie = $movies[$movieIndex];
            return view('movies.show', compact('movies', 'singleMovie'));
        } else {
            return abort(404);
        }
    }
}

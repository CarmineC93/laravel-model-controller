<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function movies()  //probabilmente non necessaria
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

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

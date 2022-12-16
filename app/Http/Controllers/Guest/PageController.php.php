<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController.php extends Controller
{
    
    public function index() {
        $movie = Movie::all();
        return view('home', compact('movies'));
    }
}

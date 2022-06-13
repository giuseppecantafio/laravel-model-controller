<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// mi importo il model
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        // metto all'interno della variabile $movies tutto il db
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //recupero di tutti i film dal database e passaggio alla view
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies')); //return di una collection
    }
}

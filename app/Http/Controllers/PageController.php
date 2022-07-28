<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    function index()
    {
        $movies = Movie::all();
        //dump($movies);
        return view('movie', [
            'movies' => $movies
        ]);
    }
}

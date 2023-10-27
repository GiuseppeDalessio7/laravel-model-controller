<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // dd(Movie::all());
        return view('home', ['movies' => Movie::all(),]);
    }
}

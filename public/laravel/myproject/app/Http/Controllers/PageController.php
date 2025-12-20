<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        $names = ['Ravi', 'Kumar', 'Anita'];

        return view('home', compact('title', 'names'));
    }
}

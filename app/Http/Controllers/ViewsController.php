<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        // Homepage
        return view('static.welcome');
    }

    public function about()
    {
        return view('static.about');
    }

    public function console()
    {
        return view('static.console');
    }

    
}

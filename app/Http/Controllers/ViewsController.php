<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        // Homepage
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function console()
    {
        return view('console');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        // Homepage
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->admin)
        {
            return view('admin.dashboard');
        }
        else 
        {
            return redirect('/');
        }
    }

    public function manual()
    {
        if (Auth::user()->admin)
        {
            return view('admin.manual');
        }
        else 
        {
            return redirect('/');
        }
    }

    public function showAllPosts()
    {
        if (Auth::check() && Auth::user()->admin)
        {
        $posts = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts')->with('posts', $posts);
        }
        else 
        {
            return redirect('/blog');
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('blog.posts')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check())
        {
            return view('blog.create');
        }
        else
        {
            return redirect('blog');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check())
        {
            $this->validate($request, [
                'title' => 'required',
                'content' => 'required'
            ]);
            // create post
            $post = new Blog;
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->slug = "";
            $post->categoy = "";
            $post->metatags = "";

            $post->save();
    
            return redirect('blog')->with('success', 'Post created');
        }
        else
        {
            return redirect('blog');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Blog::find($id);
        return view('blog.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check())
        {
            $post = Blog::find($id);
            return view('blog.edit')->with('post', $post);
        }
        else
        {
            return redirect('blog');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::check())
        {
            $this->validate($request, [
                'title' => 'required',
                'content' => 'required',

            ]);
            
            $post = Blog::find($id);
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->slug = "";
            $post->categoy = "";
            $post->metatags = "";
            $post->save();
        
            return redirect('blog')->with('success', 'Post Updated');
        }
        else
        {
            return redirect('blog');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check())
        {
            $post = Blog::find($id);
            $post->delete();
            return redirect('blog')->with('success', 'Post Remove');
        }
        else
        {
            return redirect('blog');
        }
    }
}

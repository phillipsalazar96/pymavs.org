<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('events.posts')->with('posts', $posts);
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
            return view('events.create');
        }
        else
        {
            return redirect('events');
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
            'content' => 'required',
            'event_date' => 'required'
          ]);
          // create post
          $post = new Event;
          $post->title = $request->input('title');
          $post->content = $request->input('content');
          $post->event_date = $request->input('event_date');
          $post->save();
  
          return redirect('events');//->with('success', 'Post created');
        }
        else
        {
            return redirect('events');
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
        $post = Event::find($id);
        return view('events.show')->with('post', $post);
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
            $post = Event::find($id);
            return view('events.edit')->with('post', $post);
        }
        else
        {
            return redirect('events');
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
        //
        if (Auth::check())
        {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'event_date' => 'required'

          ]);
          
          $post = Event::find($id);
          $post->title = $request->input('title');
          $post->content = $request->input('content');
          $post->event_date = $request->input('event_date');
          $post->save();
      
          return redirect('events');//->with('success', 'Post Updated');
        }
        else
        {
            return redirect('events');
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
        //
        $post = Event::find($id);
        $post->delete();
        return redirect('events')->with('success', 'Post Remove');
    }
}

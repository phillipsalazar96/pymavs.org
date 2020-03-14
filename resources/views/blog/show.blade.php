@extends('layouts.app')



@section('content')
<div class="box posts-box margin-from-top ">
  <h1 class="title-of-posts is-large">{{$post->title}}</h1>
  <hr/>
  <p>{!!$post->content!!}</p>
</div>

  @if (Auth::check())
      @if (Auth::user()->admin )
          
    <div class="button-box">
    <span><a href="/blog/{{$post->id}}/edit" class="button is-link"">Edit</a></span>
      <br>
      <br>
      {{ Form::open(['action' => ['BlogsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pullright']) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'button is-danger']) }}
      {{ Form::close() }}
    </div>
      @endif
  @endif
@endsection

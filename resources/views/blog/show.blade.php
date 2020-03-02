@extends('layouts.app')



@section('content')
<div class="well posts-box">
  <h1>{{$post->title}}</h1>
  <hr/>
  <p>{!!$post->content!!}</p>
</div>

  @if (Auth::check())
      @if (Auth::user()->admin )
          
    <div class="button-box">
    <span><a href="/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a></span>
      <br>
      <br>
      {{ Form::open(['action' => ['BlogsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pullright']) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
      {{ Form::close() }}
    </div>
      @endif
  @endif
@endsection

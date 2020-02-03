@extends('layouts.app')



@section('content')
  <h1>{{$post->title}}</h1>
  <p>{{$post->content}}</p>
  <hr/>
  @if (!Auth::guest())
      

  <span><a href="/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a></span>
  {{ Form::open(['action' => ['BlogsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pullright']) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
  {{ Form::close() }}
  @endif
@endsection

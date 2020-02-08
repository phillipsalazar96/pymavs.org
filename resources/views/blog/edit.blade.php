
@extends('layouts.app')

@section('content')
<div class="forms-box">
  <h1>Edit post</h1>
  {{ Form::open(['action' => ['BlogsController@update', $post->id], 'method' => 'POST']) }}
  <div class="form-group">

    {{ Form::text('title', $post->title, ['class' => 'from-control', 'placeholder' => 'Title']) }}
  </div>
  <div class="form-group">
    {{ Form::text('metatags', $post->metatags, ['class' => 'from-control', 'placeholder' => 'Meta Tags']) }}
  </div>

  <div class="form-group">
    {{ Form::select('category', [$post->category => $post->category ,'blog' => 'Blog', 'events' => 'Events', 'tutorial' => 'Tutorial']) }}
  </div>
  <div class="form-group">

    {{ Form::textarea('content', $post->content, ['class' => 'from-control', 'placeholder' => 'content...']) }}
  </div>
  {{ Form::hidden('_method', 'PUT') }}
  {{ Form::submit('submit', ['class' => 'btn-primary'])}}

  {{ Form::close() }}
  <div class="forms-box">

@endsection

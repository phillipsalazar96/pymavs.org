
@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
    {{ Form::label('publish', 'Do you want to publish') }}
    {{ Form::select('publish', ['notpublish' => 'Not Publish', 'publish' => 'Publish']) }}
  </div>
  <div class="form-group">

    {{ Form::textarea('content', $post->content, ['id' => 'mytextarea', 'class' => 'from-control', 'placeholder' => 'content...']) }}
  </div>
  {{ Form::hidden('_method', 'PUT') }}
  {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}

  {{ Form::close() }}
  <div class="forms-box">

@endsection

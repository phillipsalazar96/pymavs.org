
@extends('layouts.app')

@section('content')
<div class="forms-box">
  <h1>Edit post</h1>
  {{ Form::open(['action' => ['EventsController@update', $post->id], 'method' => 'POST']) }}
  <div class="form-group">

    {{ Form::text('title', $post->title, ['class' => 'from-control', 'placeholder' => 'Title']) }}
  </div>
  <div class="form-group">

    {{ Form::date('event_date', \Carbon\Carbon::now()) }}
  </div>
  <div class="form-group">

    {{ Form::textarea('content', $post->content, ['class' => 'from-control', 'placeholder' => 'content...']) }}
  </div>
  {{ Form::hidden('_method', 'PUT') }}
  {{ Form::submit('submit', ['class' => 'btn-primary'])}}

  {{ Form::close() }}
</div>

@endsection


@extends('layouts.app')

@section('content')

  <h1>Create post</h1>
  {{ Form::open(['action' => 'EventsController@store', 'method' => 'POST']) }}
  <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', '', ['class' => 'from-control', 'placeholder' => 'Title']) }}
  </div>
  <div class="form-group">
    {{ Form::label('event_date', 'Event Date') }}
    {{ Form::date('event_date', \Carbon\Carbon::now()) }}
  </div>

  <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('content', '', ['class' => 'from-control', 'placeholder' => 'Body Text']) }}
  </div>
  {{ Form::submit('submit', ['class' => 'btn-primary'])}}

  {{ Form::close() }}


@endsect
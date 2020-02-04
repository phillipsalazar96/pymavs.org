
@extends('layouts.app')

@section('content')
<div class="forms-box">
  <h1>Create Event</h1>
  {{ Form::open(['action' => 'EventsController@store', 'method' => 'POST']) }}
  <div class="form-group">

    {{ Form::text('title', '', ['class' => 'from-control', 'placeholder' => 'Title']) }}
  </div>
  <div class="form-group">

    {{ Form::date('event_date', \Carbon\Carbon::now()) }}
  </div>

  <div class="form-group">

    {{ Form::textarea('content', '', ['class' => 'from-control', 'placeholder' => 'content...']) }}
  </div>
  {{ Form::submit('submit', ['class' => 'btn-primary'])}}

  {{ Form::close() }}
</div>

@endsection
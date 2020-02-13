
@extends('layouts.app')

@section('content')
<div class="forms-box">
  <h1>Create post</h1>
  {{ Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) }}
  <div class="form-group">
   
    {{ Form::text('title', '', ['class' => 'from-control', 'placeholder' => 'Title']) }}
  </div>
  <div class="form-group">
    {{ Form::text('metatags', '', ['class' => 'from-control', 'placeholder' => 'Meta Tags']) }}
  </div>

  <div class="form-group">
    {{ Form::select('category', ['blog' => 'Blog', 'events' => 'Events', 'tutorial' => 'Tutorial']) }}
  </div>

  <div class="form-group">
    {{ Form::label('publish', 'Do you want to publish') }}
    {{ Form::select('publish', ['notpublish' => 'Not Publish', 'publish' => 'Publish']) }}
  </div>

  <div class="form-group">
    
  {{ Form::textarea('content', '', ['id' => 'custom-toolbar-button', 'class' => ['from-control'], 'placeholder' => 'content...']) }}

  </div>
  {{ Form::submit('submit', ['class' => 'btn btn-primary'])}}

  {{ Form::close() }}

</div>
@endsection
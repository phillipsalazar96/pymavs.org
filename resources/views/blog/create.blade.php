
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="posts-box margin-from-top padding-from-bottom">
>>>>>>> frontend
  <h1>Create post</h1>
  {{ Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) }}
  <div class="form-group">
   
    {{ Form::text('title', '', ['class' => 'input is-info', 'placeholder' => 'Title']) }}
  </div>
  <br/>
  <div class="select is-info">
    {{ Form::select('category', ['blog' => 'Blog', 'events' => 'Events', 'tutorial' => 'Tutorial'],null, ['class' => '']) }}
  </div>
  <br/>
  <p> Do you want to publish</p>
  <div class="select is-info">
    
    {{ Form::select('publish', ['notpublish' => 'Not Publish', 'publish' => 'Publish'], null, ['class' => '']) }}
  </div>
<br/>
<br/>
  <div class="form-group">
    
  {{ Form::textarea('content', '', ['id' => 'custom-toolbar-button', 'class' => ['from-control'], 'placeholder' => 'content...']) }}

  </div>
<<<<<<< HEAD
  {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
=======
  <br/>
  {{ Form::submit('Create Post',['class' => 'button is-link'])}}
>>>>>>> frontend

  {{ Form::close() }}

</div>
@endsection
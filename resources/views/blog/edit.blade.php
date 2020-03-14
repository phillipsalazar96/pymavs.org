@extends('layouts.app')

@section('content')
<div class="posts-box margin-from-top padding-from-bottom">
  <h1>Create post</h1>
  {{ Form::open(['action' => ['BlogsController@store', $post->id],'method' => 'POST']) }}
  <div class="form-group">
   
    {{ Form::text('title', $post->title, ['class' => 'input is-info', 'placeholder' => 'Title']) }}
  </div>
  <br/>
  <div class="select is-info">
    {{ Form::select('category', [$post->category => $post->category,'blog' => 'Blog', 'events' => 'Events', 'tutorial' => 'Tutorial'],null, ['class' => '']) }}
  </div>
  <br/>
  <p> Do you want to publish</p>
  <div class="select is-info">
    
    {{ Form::select('publish', [$post->publish => $post->publish, 'notpublish' => 'Not Publish', 'publish' => 'Publish'], null, ['class' => '']) }}
  </div>
<br/>
<br/>
  <div class="form-group">
    
  {{ Form::textarea('content', $post->content, ['id' => 'custom-toolbar-button', 'class' => ['from-control'], 'placeholder' => 'content...']) }}

  </div>
  <br/>
  {{ Form::submit('Create Post',['class' => 'button is-link'])}}

  {{ Form::close() }}

</div>
@endsection

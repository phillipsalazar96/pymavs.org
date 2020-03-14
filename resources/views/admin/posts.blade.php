@extends('layouts.app')

@section('content')
  <h1 class="title-of-posts is-large"">All Posts</h1>
  @if (Auth::check() && Auth::user()->admin )
    
    @if(count($posts) > 0 )
    @foreach($posts as $post)
      
      
        <div class="box posts-box">
        
          <a class="button is-medium python-button" href="/blog/{{ $post->slug }}" ><h3>{{ $post->title }}</h3></a>
            <p>{{ date('d-m-Y', strtotime($post->created_at)) }}<p>
            @if($post->publish == 1 )   
            <p>Publish</p>
            @else
                <p>Not publish</p> 
            @endif


        </div>
      

    @endforeach
    {{$posts->links()}}
  @else
    <p>There are no blog posted!</p>
  @endif

    
@endif
@endsection

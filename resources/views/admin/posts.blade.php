@extends('layouts.app')

@section('content')
  <h1 class="title-of-posts">The Blog</h1>
  @if (Auth::check() && Auth::user()->admin )
    
    @if(count($posts) > 0 )
    @foreach($posts as $post)
      
      
        <div class="well posts-box">
        
            <h3><a href="/blog/{{ $post->slug }}" >{{ $post->title }}</a></h3>
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

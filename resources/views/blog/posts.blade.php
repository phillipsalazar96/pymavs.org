
  @extends('layouts.app')

  @section('content')
 
  <h1 class="title-of-posts is-large">The {{$slug}}</h1>




    @if(count($posts) > 0 )

      @foreach($posts as $post)
        
        @if($post->publish == 1)
          <div class="box posts-box">
          
            <a  class="" href="/blog/{{ $post->slug }}" ><h3 class="button is-medium python-button">{{ $post->title }}</h3></a>
            <p>{{ date('d-m-Y', strtotime($post->created_at)) }}<p>
          

          </div>
        @endif

      @endforeach
      
    @else
    <div class="box posts-box margin-from-top">
      <p>There are no {{$slug}} posted!</p>
    </div>
    @endif

    
  @endsection

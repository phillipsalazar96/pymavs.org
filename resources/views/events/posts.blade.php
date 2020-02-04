
  @extends('layouts.app')

  @section('content')
  
    <h1 class="title-of-posts">Events</h1>
    @if(count($posts) > 0)
      @foreach($posts as $post)

        <div class="well posts-box">
          <h3><a href="/events/{{$post->id}}" >{{$post->title}}</a></h3>
          <p>{{$post->created_at}}<p>

        </div>

      @endforeach
      {{$posts->links()}}
    @else
      <p>There are no events posted!</p>
    @endif
  @endsection

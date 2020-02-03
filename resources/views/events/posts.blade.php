
  @extends('layouts.app')

  @section('content')
    <h1>Events</h1>
    @if(count($posts) > 0)
      @foreach($posts as $post)

        <div class="well">
          <h3><a href="/events/{{$post->id}}" >{{$post->title}}</a></h3>

        </div>

      @endforeach
      {{$posts->links()}}
    @else
      <p>There are no events posted!</p>
    @endif
  @endsection

@extends('app')

@section('navbar')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container navbarz">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/py_logo.png')}}">
        </a>
    

        <div >
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                
                <li><a href="/blog">Blog</a></li>
                <li><a href="/console">Console</a></li>
                <li><a href="/about">About Us</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>

            <!-- Right Side Of Navbar -->
         <!--   <ul class="navbar-nav" -->
                <!-- Authentication Links -->
                @guest

                @else

                    <li>
                        @if (Auth::user()->admin )
                        <a href="/admin">Dashbaord</a>
                        @endif
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>
                    </li>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                         @csrf
                     </form>
                        </div>
                   
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endsection
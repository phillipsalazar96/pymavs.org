
<nav class="navbar is-black" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
      <a class="navbar-item" href="{{ url('/') }}">
        
            <img class="navbar-img" src="{{asset('images/py_logo.png')}}">
      </a>
  
      <a role="button" class="navbar-burger " aria-label="menu" aria-expanded="false" >
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
    
        <a href="/blog/category/events" class="navbar-item navbar-item-url navbar-box-bg ">
          Events
        </a>
        <a href="/blog/category/tutorials" class="navbar-item navbar-item-url navbar-box-bg ">
          Tutorials
        </a>
        <a href="/blog/category/blogs" class="navbar-item navbar-item-url navbar-box-bg">
          Blog
        </a>
        <a href="/console" class="navbar-item navbar-item-url navbar-box-bg">
          Console
        </a>
  
        <a href="/about" class="navbar-item navbar-item-url navbar-box-bg">
          About
        </a>
        @guest

        @else
            @if (Auth::user()->admin )
              <a class="navbar-item navbar-item-url navbar-box-bg" href="/admin">Dashbaord</a>
            @endif
        @endguest
    
  
      <div class="navbar-button-box">
       
            @guest

            @else

           
                    
                    <a  class="navbar-item button is-danger nav-spacing" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>
               

                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                     @csrf
                 </form>
                   
               
            @endguest
      
        </div>
      </div>
    </div>
  </nav>
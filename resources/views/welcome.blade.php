<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  
        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/images/uta_building.png'); 
                background-attachment:fixed;
                background-size: 100%;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;

                background-size: cover;
                background-color: black;
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
               
                margin: 0px;
                padding: 0px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .moto {
                width: 500px;
                margin-top: -35%;
            }
            .moto h2 {
                color: white;
            }
        </style>
    </head>
    <body>
        @include('layouts.app')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                   
                       
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="moto">
                <h2>Empowering Python programmers at the University of Texas at Arlington to innovate, network, and teach.</h2>
                </div>
            </div>
        </div>
    </body>
</html>

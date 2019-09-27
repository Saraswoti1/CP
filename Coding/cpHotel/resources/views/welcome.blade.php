<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel management system</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
               /* background-color: #fff;*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                right: 200px;
                top: 18px;
                font-size: 58px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 58px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 53px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: cursive;
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }

        </style>
    </head>
    <body>
    
    <!--   <p>dijfgkj</p>-->
        <div class="flex-center position-ref full-height ">
            @if (Route::has('login'))
                <div class=" title m-b-md links blue-rectangle">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
               
                <div class="title top-right ">
                    Hotel Management System
                </div>


            </div>
        </div>
    </body>
</html>
